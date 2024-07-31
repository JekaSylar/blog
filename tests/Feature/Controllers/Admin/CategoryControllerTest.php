<?php

namespace Controllers\Admin;

use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryControllerTest extends TestCase {
    /**
     * A basic feature test example.
     */
    public function test_admin_category_index_not_auth_user(): void {


        $response = $this->get( route( 'login' ) );

        $response->assertStatus( 200 );
    }

    public function test_admin_category_index(): void {
        $user = User::factory()->create([
            'is_admin' => true
        ]);

        $response = $this->actingAs( $user )->get( route( 'categories.index' ) );

        $response->assertStatus( 200 );
    }

    public function test_admin_category_index_not_admin(): void {
        $user = User::factory()->create([
            'is_admin' => false
        ]);

        $response = $this->actingAs( $user )->get( route( 'categories.index' ) );

        $response->assertStatus( 404 );

    }

    public function test_admin_category_store(): void {

        $user = User::factory()->create([
            'is_admin' => true
        ]);

        $response  = $this->actingAs( $user )->post( route( 'categories.store' ), [
            'title' => 'category1',
            'description' => 'category',
           'keywords' => 'category, test, test'
        ], [] );


        $response->assertStatus(302);

        $this->assertDatabaseHas('categories', [
            'title' => 'category1',
            'description' => 'category',
            'keywords' => 'category, test, test'
        ]);

    }

    public function test_admin_category_store_not_admin(): void {

        $user = User::factory()->create([
            'is_admin' => false
        ]);

        $response  = $this->actingAs( $user )->post( route( 'categories.store' ), [
            'title' => 'category1',
            'description' => 'category',
            'keywords' => 'category, test, test'
        ], [] );


        $response->assertStatus(404);


    }

    public function test_admin_category_edit(): void
    {
        $user = User::factory()->create([
            'is_admin' => true
        ]);

        $category = Category::factory()->create();
        $response = $this->actingAs( $user )->get( route( 'categories.edit', $category) );

        $response->assertStatus(200);

    }

    public function test_admin_category_edit_not_admin(): void
    {
        $user = User::factory()->create([
            'is_admin' => false
        ]);

        $category = Category::factory()->create();
        $response = $this->actingAs( $user )->get( route( 'categories.edit', $category) );

        $response->assertStatus(404);

    }

    public function test_admin_category_update(): void
    {
        $user = User::factory()->create([
            'is_admin' => true
        ]);


        $category = Category::factory()->create();
        $response = $this->actingAs( $user )->put( route( 'categories.update', $category),  [
            'title' => 'my_category',
            'slug' => null,
        ]);


        $response->assertStatus(302);

        $this->assertDatabaseHas(Category::class, [
            'id' => $category->id,
        ]);

    }

    public function test_admin_category_delete(): void
    {
        $user = User::factory()->create([
            'is_admin' => true
        ]);


        $category = Category::factory()->create();
        $response = $this->actingAs( $user )->delete( route( 'categories.destroy', $category));

        $this->assertModelMissing($category);
        $response->assertStatus(302);

    }
}
