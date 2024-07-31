import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderList, ssrInterpolate } from "vue/server-renderer";
const _sfc_main = {
  __name: "ListCategories",
  __ssrInlineRender: true,
  props: {
    categories: {
      required: true,
      type: Object
    }
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8" }, _attrs))}><div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">`);
      if (__props.categories.data.length > 0) {
        _push(`<table class="min-w-full divide-y divide-gray-300 mt-6"><thead><tr><th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Назва</th><th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Частина посилання</th><th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Дії</th><th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Кількість</th></tr></thead><tbody class="divide-y divide-gray-200"><!--[-->`);
        ssrRenderList(__props.categories.data, (category) => {
          _push(`<tr><td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">${ssrInterpolate(category.title)}</td><td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">${ssrInterpolate(category.slug)}</td><td class="whitespace-nowrap py-4 text-left text-sm font-medium"><a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Редагувати</a><a href="#" class="text-indigo-600 hover:text-indigo-900">Видалити</a></td><td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">25</td></tr>`);
        });
        _push(`<!--]--></tbody></table>`);
      } else {
        _push(`<!---->`);
      }
      _push(`</div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Admin/Category/Partials/ListCategories.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
