import { mergeProps, useSSRContext, withCtx, createVNode, openBlock, createBlock, createCommentVNode } from "vue";
import { ssrRenderAttrs, ssrRenderComponent } from "vue/server-renderer";
import _sfc_main$6 from "./LogoutOtherBrowserSessionsForm-CyGLKhbN.js";
import { _ as _export_sfc } from "./_plugin-vue_export-helper-1tPrXgE0.js";
import _sfc_main$5 from "./TwoFactorAuthenticationForm-CJY8g4Oq.js";
import _sfc_main$4 from "./UpdatePasswordForm-Do_XHNyk.js";
import _sfc_main$3 from "./UpdateProfileInformationForm-Blg7-b8Z.js";
import { _ as _sfc_main$2 } from "../ssr.js";
import "@inertiajs/vue3";
import "./ActionMessage-lseuyjgQ.js";
import "./DialogModal-DLAENE0H.js";
import "./SectionTitle-4i2p8f-X.js";
import "./InputError-CFENxfoo.js";
import "./PrimaryButton-CtpSN9QQ.js";
import "./SecondaryButton-BgIg9sGF.js";
import "./DangerButton-BsxM2vkF.js";
import "./InputLabel-Cnda-O0w.js";
import "./FormSection-D-jZqCN4.js";
import "@inertiajs/vue3/server";
import "@vue/server-renderer";
import "@headlessui/vue";
import "@heroicons/vue/24/outline";
import "@heroicons/vue/24/outline/index.js";
import "@heroicons/vue/20/solid/index.js";
const _sfc_main$1 = {};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs) {
  _push(`<div${ssrRenderAttrs(mergeProps({ class: "hidden sm:block" }, _attrs))}><div class="py-8"><div class="border-t border-gray-200 dark:border-gray-700"></div></div></div>`);
}
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Components/SectionBorder.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const SectionBorder = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["ssrRender", _sfc_ssrRender]]);
const _sfc_main = {
  __name: "Show",
  __ssrInlineRender: true,
  props: {
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(ssrRenderComponent(_sfc_main$2, mergeProps({ title: "Профіль" }, _attrs), {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`<div${_scopeId}><div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"${_scopeId}>`);
            if (_ctx.$page.props.jetstream.canUpdateProfileInformation) {
              _push2(`<div${_scopeId}>`);
              _push2(ssrRenderComponent(_sfc_main$3, {
                user: _ctx.$page.props.auth.user
              }, null, _parent2, _scopeId));
              _push2(ssrRenderComponent(SectionBorder, null, null, _parent2, _scopeId));
              _push2(`</div>`);
            } else {
              _push2(`<!---->`);
            }
            if (_ctx.$page.props.jetstream.canUpdatePassword) {
              _push2(`<div${_scopeId}>`);
              _push2(ssrRenderComponent(_sfc_main$4, { class: "mt-10 sm:mt-0" }, null, _parent2, _scopeId));
              _push2(ssrRenderComponent(SectionBorder, null, null, _parent2, _scopeId));
              _push2(`</div>`);
            } else {
              _push2(`<!---->`);
            }
            if (_ctx.$page.props.jetstream.canManageTwoFactorAuthentication) {
              _push2(`<div${_scopeId}>`);
              _push2(ssrRenderComponent(_sfc_main$5, {
                "requires-confirmation": __props.confirmsTwoFactorAuthentication,
                class: "mt-10 sm:mt-0"
              }, null, _parent2, _scopeId));
              _push2(ssrRenderComponent(SectionBorder, null, null, _parent2, _scopeId));
              _push2(`</div>`);
            } else {
              _push2(`<!---->`);
            }
            _push2(ssrRenderComponent(_sfc_main$6, {
              sessions: __props.sessions,
              class: "mt-10 sm:mt-0"
            }, null, _parent2, _scopeId));
            _push2(`</div></div>`);
          } else {
            return [
              createVNode("div", null, [
                createVNode("div", { class: "max-w-7xl mx-auto py-10 sm:px-6 lg:px-8" }, [
                  _ctx.$page.props.jetstream.canUpdateProfileInformation ? (openBlock(), createBlock("div", { key: 0 }, [
                    createVNode(_sfc_main$3, {
                      user: _ctx.$page.props.auth.user
                    }, null, 8, ["user"]),
                    createVNode(SectionBorder)
                  ])) : createCommentVNode("", true),
                  _ctx.$page.props.jetstream.canUpdatePassword ? (openBlock(), createBlock("div", { key: 1 }, [
                    createVNode(_sfc_main$4, { class: "mt-10 sm:mt-0" }),
                    createVNode(SectionBorder)
                  ])) : createCommentVNode("", true),
                  _ctx.$page.props.jetstream.canManageTwoFactorAuthentication ? (openBlock(), createBlock("div", { key: 2 }, [
                    createVNode(_sfc_main$5, {
                      "requires-confirmation": __props.confirmsTwoFactorAuthentication,
                      class: "mt-10 sm:mt-0"
                    }, null, 8, ["requires-confirmation"]),
                    createVNode(SectionBorder)
                  ])) : createCommentVNode("", true),
                  createVNode(_sfc_main$6, {
                    sessions: __props.sessions,
                    class: "mt-10 sm:mt-0"
                  }, null, 8, ["sessions"])
                ])
              ])
            ];
          }
        }),
        _: 1
      }, _parent));
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Profile/Show.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
