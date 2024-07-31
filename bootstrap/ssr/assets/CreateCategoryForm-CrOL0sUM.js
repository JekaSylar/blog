import { ref, onMounted, mergeProps, useSSRContext, unref, withCtx, createTextVNode } from "vue";
import { ssrRenderAttrs, ssrInterpolate, ssrRenderComponent } from "vue/server-renderer";
import { _ as _sfc_main$2 } from "./InputLabel-Cnda-O0w.js";
import { _ as _sfc_main$3, a as _sfc_main$4 } from "./InputError-CFENxfoo.js";
import { _ as _sfc_main$5 } from "./PrimaryButton-CtpSN9QQ.js";
import { useForm } from "@inertiajs/vue3";
import "vue3-toastify";
const _sfc_main$1 = {
  __name: "TextTextarea",
  __ssrInlineRender: true,
  props: {
    modelValue: String,
    rows: {
      type: Number,
      default: 4
    }
  },
  emits: ["update:modelValue"],
  setup(__props, { expose: __expose }) {
    const input = ref(null);
    onMounted(() => {
      if (input.value.hasAttribute("autofocus")) {
        input.value.focus();
      }
    });
    __expose({ focus: () => input.value.focus() });
    return (_ctx, _push, _parent, _attrs) => {
      let _temp0;
      _push(`<textarea${ssrRenderAttrs(_temp0 = mergeProps({
        ref_key: "input",
        ref: input,
        rows: __props.rows,
        class: "border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm",
        value: __props.modelValue
      }, _attrs), "textarea")}>${ssrInterpolate("value" in _temp0 ? _temp0.value : "")}</textarea>`);
    };
  }
};
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/TextTextarea.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const _sfc_main = {
  __name: "CreateCategoryForm",
  __ssrInlineRender: true,
  setup(__props) {
    const form = useForm({
      title: null,
      slug: null,
      description: null,
      keywords: null
    });
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(_attrs)}><h2 class="font-medium mb-3">Додати нову категорію</h2><form class="flex flex-col gap-4"><div>`);
      _push(ssrRenderComponent(_sfc_main$2, { value: "Назва" }, null, _parent));
      _push(`<div class="mt-2">`);
      _push(ssrRenderComponent(_sfc_main$3, {
        class: ["w-full", { "border-red-600": unref(form).errors.title }],
        modelValue: unref(form).title,
        "onUpdate:modelValue": ($event) => unref(form).title = $event
      }, null, _parent));
      _push(`</div>`);
      if (unref(form).errors.title) {
        _push(ssrRenderComponent(_sfc_main$4, {
          message: unref(form).errors.title
        }, null, _parent));
      } else {
        _push(`<!---->`);
      }
      _push(`</div><div>`);
      _push(ssrRenderComponent(_sfc_main$2, { value: "Частина посилання" }, null, _parent));
      _push(`<div class="mt-2">`);
      _push(ssrRenderComponent(_sfc_main$3, {
        class: ["w-full", { "border-red-600": unref(form).errors.slug }],
        modelValue: unref(form).slug,
        "onUpdate:modelValue": ($event) => unref(form).slug = $event
      }, null, _parent));
      _push(`</div>`);
      if (unref(form).errors.slug) {
        _push(ssrRenderComponent(_sfc_main$4, {
          message: unref(form).errors.slug
        }, null, _parent));
      } else {
        _push(`<!---->`);
      }
      _push(`</div><div>`);
      _push(ssrRenderComponent(_sfc_main$2, { value: "Опис" }, null, _parent));
      _push(`<div class="mt-2">${ssrInterpolate(unref(form).description)} `);
      _push(ssrRenderComponent(_sfc_main$1, {
        class: ["w-full", { "border-red-600": unref(form).errors.description }],
        modelValue: unref(form).description,
        "onUpdate:modelValue": ($event) => unref(form).description = $event
      }, null, _parent));
      _push(`</div>`);
      if (unref(form).errors.description) {
        _push(ssrRenderComponent(_sfc_main$4, {
          message: unref(form).errors.description
        }, null, _parent));
      } else {
        _push(`<!---->`);
      }
      _push(`</div><div>`);
      _push(ssrRenderComponent(_sfc_main$2, { value: "Ключові слова" }, null, _parent));
      _push(`<div class="mt-2">`);
      _push(ssrRenderComponent(_sfc_main$3, {
        class: ["w-full", { "border-red-600": unref(form).errors.keywords }],
        modelValue: unref(form).keywords,
        "onUpdate:modelValue": ($event) => unref(form).keywords = $event
      }, null, _parent));
      _push(`</div>`);
      if (unref(form).errors.keywords) {
        _push(ssrRenderComponent(_sfc_main$4, {
          message: unref(form).errors.keywords
        }, null, _parent));
      } else {
        _push(`<!---->`);
      }
      _push(`</div><div class="flex justify-items-end">`);
      _push(ssrRenderComponent(_sfc_main$5, {
        disabled: unref(form).processing
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(` Додати нову категорію `);
          } else {
            return [
              createTextVNode(" Додати нову категорію ")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</div></form></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Admin/Category/Partials/CreateCategoryForm.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
