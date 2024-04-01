<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>GrapesJS Demo - Free Open Source Website Page Builder</title>
    <meta content="Best Free Open Source Responsive Websites Builder" name="description">
    <link rel="stylesheet" href="{{ asset('certificate/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('certificate/css/grapes.min.css') }}">
    <link rel="stylesheet" href="{{ asset('certificate/css/grapes.css') }}">
    <link rel="stylesheet" href="{{ asset('certificate/css/tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('certificate/css/demos.css') }}">
    <link href="https://unpkg.com/grapick/dist/grapick.min.css" rel="stylesheet">

    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-LWEFNL65W8&amp;cx=c&amp;_slc=1"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('certificate/js/toastr.min.js') }}"></script>
    <script src="{{ asset('certificate/js/grapes.min.js') }}"></script>
    <script src="{{ asset('certificate/js/grapesjs-preset-webpage.js') }}"></script>
    <script src="{{ asset('certificate/js/grapes-js-blocks-basic.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-plugin-forms.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-component-countdown.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-plugin-export.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-tabs.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-custom-code.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-touch.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-parser-postcss.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-tooltip.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-tui-image-editor.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-typed.js')}}"></script>
    <script src="{{ asset('certificate/js/grapesjs-style-bg.js')}}"></script>

    <style type="text/css">
        .icons-flex {
            background-size: 70% 65% !important;
            height: 15px;
            width: 17px;
            opacity: 0.9;
        }

        .icon-dir-row {
            background: url("./img/flex-dir-row.png") no-repeat center;
        }

        .icon-dir-row-rev {
            background: url("./img/flex-dir-row-rev.png") no-repeat center;
        }

        .icon-dir-col {
            background: url("./img/flex-dir-col.png") no-repeat center;
        }

        .icon-dir-col-rev {
            background: url("./img/flex-dir-col-rev.png") no-repeat center;
        }

        .icon-just-start {
            background: url("./img/flex-just-start.png") no-repeat center;
        }

        .icon-just-end {
            background: url("./img/flex-just-end.png") no-repeat center;
        }

        .icon-just-sp-bet {
            background: url("./img/flex-just-sp-bet.png") no-repeat center;
        }

        .icon-just-sp-ar {
            background: url("./img/flex-just-sp-ar.png") no-repeat center;
        }

        .icon-just-sp-cent {
            background: url("./img/flex-just-sp-cent.png") no-repeat center;
        }

        .icon-al-start {
            background: url("./img/flex-al-start.png") no-repeat center;
        }

        .icon-al-end {
            background: url("./img/flex-al-end.png") no-repeat center;
        }

        .icon-al-str {
            background: url("./img/flex-al-str.png") no-repeat center;
        }

        .icon-al-center {
            background: url("./img/flex-al-center.png") no-repeat center;
        }

        [data-tooltip]::after {
            background: rgba(51, 51, 51, 0.9);
        }

        .gjs-pn-commands {
            min-height: 40px;
        }

        #gjs-sm-float {
            display: none;
        }

        .gjs-logo-version {
            background-color: #756467;
        }

        .gjs-pn-btn.gjs-pn-active {
            box-shadow: none;
        }

        .CodeMirror {
            min-height: 450px;
            margin-bottom: 8px;
        }

        .grp-handler-close {
            background-color: transparent;
            color: #ddd;
        }

        .grp-handler-cp-wrap {
            border-color: transparent;
        }
    </style>
    <style type="text/css">
        html {
            -ms-touch-action: none;
        }
    </style>
    <link href="https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css" rel="stylesheet">
    <link href="https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css" rel="stylesheet">
    <script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script>
    <style>
    .gjs-one-bg {
            <br>background-color: #463a3c;
            <br>
        }

       .gjs-one-color {
            <br>color: #463a3c;
            <br>
        }

      .gjs-one-color-h:hover {
            <br>color: #463a3c;
            <br>
        }

        .gjs-two-bg {
            <br>background-color: #b9a5a6;
            <br>
        }

       .gjs-two-color {
            <br>color: #b9a5a6;
            <br>
        }

        .gjs-two-color-h:hover {
            <br>color: #b9a5a6;
            <br>
        }

        .gjs-three-bg {
            <br>background-color: #804f7b;
            <br>
        }

        .gjs-three-color {
            <br>color: #804f7b;
            <br>
        }

        .gjs-three-color-h:hover {
            <br>color: #804f7b;
            <br>
        }

        .gjs-four-bg {
            <br>background-color: #d97aa6;
            <br>
        }

        .gjs-four-color {
            <br>color: #d97aa6;
            <br>
        }

        .gjs-four-color-h:hover {
            <br>color: #d97aa6;
            <br>
        }


    </style>
    <script src="https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js"></script>
    <script src="https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js"></script>
</head>

<body>
    <div style="display: none">

    </div>

    <form method="POST" id="form-template" action="{{ route('store-html-certificate', ['id' => $certificate->id]) }}">
    {{-- <form method="POST" id="form-template" action="/store-html-certificate/{{ $certificate->id }}"> --}}
        @csrf
        <input type="hidden" id="template_html" name="template_html">
        <input type="hidden" id="template_css" name="template_css">
        <button id="save-button"  style="position: absolute; z-index:100; color:#fff; margin-left:120px; margin-top:6px; background:red; padding:5px; border:1px solid #fff;">Save Template</button>
    </form>

    <div id="gjs" style="height: 100%; overflow: hidden; width: 100%;" class="gjs-editor-cont">
        <div class="gjs-editor gjs-one-bg gjs-two-color">
            <div class="gjs-cv-canvas gjs-no-touch-actions gjs-cv-canvas-bg">
                <div class="gjs-cv-canvas__frames" data-frames="" style="transform: scale(1) translate(0px, 0px);">
                    <div class="gjs-cv-canvas__spots" data-spots=""></div>
                    <div class="gjs-frames">
                        <div class="gjs-frame-wrapper" style="left: 0px; top: 0px;">
                            <div class="gjs-frame-wrapper__top gjs-two-color" data-frame-top="">
                                <div class="gjs-frame-wrapper__name" data-action-move="">

                                </div>
                                <div class="gjs-frame-wrapper__top-r">
                                    <div class="gjs-frame-wrapper__icon" data-action-remove="" style="display: none">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gjs-frame-wrapper__right" data-frame-right=""></div>
                            <div class="gjs-frame-wrapper__left" data-frame-left=""></div>
                            <div class="gjs-frame-wrapper__bottom" data-frame-bottom=""></div>
                            <iframe allowfullscreen="allowfullscreen" class="gjs-frame"></iframe>
                        </div>
                    </div>
                </div>
                <div id="gjs-cv-tools" class="gjs-cv-canvas__tools" data-tools="">
                    <div class="gjs-tools gjs-tools-gl" style="pointer-events:none">
                        <div class="gjs-placeholder">
                            <div class="gjs-placeholder-int"></div>
                        </div>
                    </div>
                    <div id="gjs-tools" style="pointer-events: none; display: none;">

                        <div class="gjs-badge"></div>
                        <div class="gjs-ghost"></div>
                        <div class="gjs-toolbar" style="pointer-events:all"></div>
                        <div class="gjs-resizer"></div>
                        <div class="gjs-offset-v"></div>
                        <div class="gjs-offset-fixed-v"></div>
                        <div class="gjs-rte-toolbar gjs-one-bg gjs-rte-toolbar-ui"
                            style="pointer-events: all; top: -1000px; left: -1000px; display: none;">
                            <div class="gjs-rte-actionbar"><span class="gjs-rte-action" title=""
                                    data-tooltip="Bold"><b>B</b></span><span class="gjs-rte-action" title=""
                                    data-tooltip="Italic"><i>I</i></span><span class="gjs-rte-action" title=""
                                    data-tooltip="Underline"><u>U</u></span><span class="gjs-rte-action" title=""
                                    data-tooltip="Strike-through"><s>S</s></span><span class="gjs-rte-action"
                                    style="font-size:1.4rem;padding:0 4px 2px;" title="" data-tooltip="Link"><svg
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z">
                                        </path>
                                    </svg></span><span class="gjs-rte-action" title=""
                                    data-tooltip="Wrap for style"><svg viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71,4.63L19.37,3.29C19,2.9 18.35,2.9 17.96,3.29L9,12.25L11.75,15L20.71,6.04C21.1,5.65 21.1,5 20.71,4.63M7,14A3,3 0 0,0 4,17C4,18.31 2.84,19 2,19C2.92,20.22 4.5,21 6,21A4,4 0 0,0 10,17A3,3 0 0,0 7,14Z">
                                        </path>
                                    </svg></span></div>
                        </div>
                    </div>
                    <div class="gjs-tools"
                        style="pointer-events: none; top: 135.016px; left: 0px; width: 1151px; height: 200px; display: none;">
                        <div class="gjs-highlighter" data-hl=""></div>
                        <div class="gjs-badge" data-badge="" style="display: block; top: -21px; left: 0px;">
                            <div class="gjs-badge__name">Section</div>
                        </div>
                        <div class="gjs-placeholder">
                            <div class="gjs-placeholder-int"></div>
                        </div>
                        <div class="gjs-ghost"></div>
                        <div class="gjs-toolbar" style="pointer-events:all"></div>
                        <div class="gjs-resizer"></div>
                        <div class="gjs-offset-v" data-offset="">
                            <div class="gjs-marginName" data-offset-m="">
                                <div class="gjs-margin-v-el gjs-margin-v-top" data-offset-m-t=""
                                    style="height: 0px; width: 1151px; top: 0px; left: 0px;"></div>
                                <div class="gjs-margin-v-el gjs-margin-v-bottom" data-offset-m-b=""
                                    style="height: 0px; width: 1151px; top: 200px; left: 0px;"></div>
                                <div class="gjs-margin-v-el gjs-margin-v-left" data-offset-m-l=""
                                    style="height: 200px; width: 0px; top: 0px; left: 0px;"></div>
                                <div class="gjs-margin-v-el gjs-margin-v-right" data-offset-m-r=""
                                    style="height: 200px; width: 0px; top: 0px; left: 1151px;"></div>
                            </div>
                            <div class="gjs-paddingName" data-offset-m="">
                                <div class="gjs-padding-v-el gjs-padding-v-top" data-offset-p-t=""
                                    style="height: 100px;"></div>
                                <div class="gjs-padding-v-el gjs-padding-v-bottom" data-offset-p-b=""
                                    style="height: 100px;"></div>
                                <div class="gjs-padding-v-el gjs-padding-v-left" data-offset-p-l=""
                                    style="height: 0px; width: 0px; top: 100px;"></div>
                                <div class="gjs-padding-v-el gjs-padding-v-right" data-offset-p-r=""
                                    style="height: 0px; width: 0px; top: 100px;"></div>
                            </div>
                        </div>
                        <div class="gjs-offset-fixed-v"></div>
                    </div>
                </div>
                <style data-canvas-style="">
                    .gjs-cv-unscale {
                        scale: 1
                    }
                </style>
            </div>
            <div class="gjs-pn-panels">
                <div class="gjs-pn-panel gjs-pn-commands gjs-one-bg gjs-two-color">
                    <div class="gjs-pn-buttons"><span class="gjs-pn-btn"></span></div>
                    <div class="gjs-logo-cont">
                        <a href="https://grapesjs.com"><img class="gjs-logo" src="img/grapesjs-logo-cl.png"></a>
                        <div class="gjs-logo-version">v0.21.8</div>
                    </div>
                </div>
                <div class="gjs-pn-panel gjs-pn-devices-c gjs-one-bg gjs-two-color">
                    <div class="gjs-pn-buttons"><span class="gjs-pn-btn gjs-pn-active gjs-four-color"><svg
                                style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21,16H3V4H21M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2Z">
                                </path>
                            </svg></span><span class="gjs-pn-btn"><svg style="display: block; max-width:22px"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,18H5V6H19M21,4H3C1.89,4 1,4.89 1,6V18A2,2 0 0,0 3,20H21A2,2 0 0,0 23,18V6C23,4.89 22.1,4 21,4Z">
                                </path>
                            </svg></span>
                        <span class="gjs-pn-btn">
                                <svg style="display: block; max-width:22px"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z">
                                </path>
                            </svg>
                        </span>
                        {{-- <span class="gjs-pn-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="save">
                                <path fill="currentColor" d="m20.71 9.29-6-6a1 1 0 0 0-.32-.21A1.09 1.09 0 0 0 14 3H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-8a1 1 0 0 0-.29-.71ZM9 5h4v2H9Zm6 14H9v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1Zm4-1a1 1 0 0 1-1 1h-1v-3a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v3H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V6.41l4 4Z">
                                </path>
                            </svg>
                        </span> --}}
                    </div>
                </div>
                <div class="gjs-pn-panel gjs-pn-options gjs-one-bg gjs-two-color">
                    <div class="gjs-pn-buttons"><span title="View components"
                            class="gjs-pn-btn gjs-pn-active gjs-four-color" data-tooltip-pos="bottom"
                            data-tooltip="View components"><svg style="display: block; max-width:22px"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15,5H17V3H15M15,21H17V19H15M11,5H13V3H11M19,5H21V3H19M19,9H21V7H19M19,21H21V19H19M19,13H21V11H19M19,17H21V15H19M3,5H5V3H3M3,9H5V7H3M3,13H5V11H3M3,17H5V15H3M3,21H5V19H3M11,21H13V19H11M7,21H9V19H7M7,5H9V3H7V5Z">
                                </path>
                            </svg></span><span title="" class="gjs-pn-btn" data-tooltip-pos="bottom"
                            data-tooltip="Preview"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z">
                                </path>
                            </svg></span><span title="" class="gjs-pn-btn" data-tooltip-pos="bottom"
                            data-tooltip="Fullscreen"><svg style="display: block; max-width:22px"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M5,5H10V7H7V10H5V5M14,5H19V10H17V7H14V5M17,14H19V19H14V17H17V14M10,17V19H5V14H7V17H10Z">
                                </path>
                            </svg></span>
                            <span title="" class="gjs-pn-btn" data-tooltip-pos="bottom"
                            data-tooltip="View code"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.89,3L14.85,3.4L11.11,21L9.15,20.6L12.89,3M19.59,12L16,8.41V5.58L22.42,12L16,18.41V15.58L19.59,12M1.58,12L8,5.58V8.41L4.41,12L8,15.58V18.41L1.58,12Z">
                                </path>
                            </svg>
                        </span>

                            <span class="gjs-pn-btn" title="" data-tooltip-pos="bottom"
                            data-tooltip="Undo"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M20 13.5C20 17.09 17.09 20 13.5 20H6V18H13.5C16 18 18 16 18 13.5S16 9 13.5 9H7.83L10.91 12.09L9.5 13.5L4 8L9.5 2.5L10.92 3.91L7.83 7H13.5C17.09 7 20 9.91 20 13.5Z">
                                </path>
                            </svg></span><span class="gjs-pn-btn" title="" data-tooltip-pos="bottom"
                            data-tooltip="Redo"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10.5 18H18V20H10.5C6.91 20 4 17.09 4 13.5S6.91 7 10.5 7H16.17L13.08 3.91L14.5 2.5L20 8L14.5 13.5L13.09 12.09L16.17 9H10.5C8 9 6 11 6 13.5S8 18 10.5 18Z">
                                </path>
                            </svg></span><span class="gjs-pn-btn" title="" data-tooltip-pos="bottom"
                            data-tooltip="Import"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"></path>
                            </svg></span><span class="gjs-pn-btn" title="" data-tooltip-pos="bottom"
                            data-tooltip="Clear canvas"><svg style="display: block; max-width:22px"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z">
                                </path>
                            </svg></span><span title="" data-tooltip-pos="bottom"
                            class="gjs-pn-btn fa fa-question-circle" data-tooltip="About"></span></div>
                </div>
                <div class="gjs-pn-panel gjs-pn-views gjs-one-bg gjs-two-color">
                    <div class="gjs-pn-buttons"><span title="Open Style Manager" data-tooltip-pos="bottom"
                            class="gjs-pn-btn"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M20.71,4.63L19.37,3.29C19,2.9 18.35,2.9 17.96,3.29L9,12.25L11.75,15L20.71,6.04C21.1,5.65 21.1,5 20.71,4.63M7,14A3,3 0 0,0 4,17C4,18.31 2.84,19 2,19C2.92,20.22 4.5,21 6,21A4,4 0 0,0 10,17A3,3 0 0,0 7,14Z">
                                </path>
                            </svg></span><span title="Open Layer Manager" data-tooltip-pos="bottom"
                            class="gjs-pn-btn"><svg style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12,16L19.36,10.27L21,9L12,2L3,9L4.63,10.27M12,18.54L4.62,12.81L3,14.07L12,21.07L21,14.07L19.37,12.8L12,18.54Z">
                                </path>
                            </svg></span><span title="Open Blocks" data-tooltip-pos="bottom"
                            class="gjs-pn-btn gjs-pn-active gjs-four-color"><svg
                                style="display: block; max-width:22px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17,13H13V17H11V13H7V11H11V7H13V11H17M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                                </path>
                            </svg></span></div>
                </div>
                <div class="gjs-pn-panel gjs-pn-views-container gjs-one-bg gjs-two-color">
                    <div>
                        <div style="display: none;">
                            <div>
                                <div class="gjs-clm-tags gjs-one-bg gjs-two-color">
                                    <div id="gjs-clm-up" class="gjs-clm-header">
                                        <div id="gjs-clm-label" class="gjs-clm-header-label">Classes</div>
                                        <div id="gjs-clm-status-c" class="gjs-clm-header-status">
                                            <span id="gjs-clm-input-c" data-states-c="">
                                                <div class="gjs-field gjs-select">
                                                    <span id="gjs-input-holder">
                                                        <select id="gjs-clm-states" data-states="">
                                                            <option value="">- State -</option>
                                                            <option value="hover">Hover</option>
                                                            <option value="active">Click</option>
                                                            <option value="nth-of-type(2n)">Even/Odd</option>
                                                        </select>
                                                    </span>
                                                    <div class="gjs-sel-arrow">
                                                        <div class="gjs-d-s-arrow"></div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="gjs-clm-tags-field" class="gjs-field">
                                        <div id="gjs-clm-tags-c" data-selectors=""></div>
                                        <input id="gjs-clm-new" data-input="" style="display: none;">
                                        <span id="gjs-clm-add-tag" class="gjs-clm-tags-btn gjs-clm-tags-btn__add"
                                            data-add=""> <svg viewBox="0 0 24 24">
                                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                            </svg> </span>
                                        <span class="gjs-clm-tags-btn gjs-clm-tags-btn__sync" style="display: none"
                                            data-sync-style=""> <svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12 18c-3.31 0-6-2.69-6-6 0-1 .25-1.97.7-2.8L5.24 7.74A7.93 7.93 0 0 0 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4m0-11V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1-.25 1.97-.7 2.8l1.46 1.46A7.93 7.93 0 0 0 20 12c0-4.42-3.58-8-8-8z">
                                                </path>
                                            </svg> </span>
                                    </div>
                                    <div class="gjs-clm-sels-info">
                                        <div class="gjs-clm-label-sel">Selected:</div>
                                        <div class="gjs-clm-sels" data-selected=""></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="gjs-sm-sector no-select">
                                    <div class="gjs-sm-sector-title"><span class="icon-settings fa fa-cog"></span>
                                        <span class="gjs-sm-sector-label">Settings</span></div>
                                    <div class="gjs-sm-properties" style="display: none;">
                                        <div class="gjs-trt-traits gjs-one-bg gjs-two-color"></div>
                                    </div>
                                </div>
                                <div class="gjs-sm-sectors gjs-one-bg gjs-two-color">
                                    <div class="gjs-sm-sector gjs-sm-sector__general no-select gjs-sm-open">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">General</div>
                                        </div>
                                        <div class="gjs-sm-properties">
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__float gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Float
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-float"
                                                                    id="float-none-c2689" name="float-c2689"
                                                                    value="none" checked="">
                                                                <label
                                                                    class="fa fa-times gjs-sm-icon gjs-radio-item-label"
                                                                    for="float-none-c2689"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-float"
                                                                    id="float-left-c2689" name="float-c2689"
                                                                    value="left">
                                                                <label
                                                                    class="fa fa-align-left gjs-sm-icon gjs-radio-item-label"
                                                                    for="float-left-c2689"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-float"
                                                                    id="float-right-c2689" name="float-c2689"
                                                                    value="right">
                                                                <label
                                                                    class="fa fa-align-right gjs-sm-icon gjs-radio-item-label"
                                                                    for="float-right-c2689"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gjs-sm-property gjs-sm-select gjs-sm-property__display">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Display
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-select">
                                                        <span id="gjs-sm-input-holder"><select>
                                                                <option value="block">block</option>
                                                                <option value="inline">inline</option>
                                                                <option value="inline-block">inline-block</option>
                                                                <option value="flex">flex</option>
                                                                <option value="none">none</option>
                                                            </select></span>
                                                        <div class="gjs-sel-arrow">
                                                            <div class="gjs-d-s-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gjs-sm-property gjs-sm-select gjs-sm-property__position">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Position
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-select">
                                                        <span id="gjs-sm-input-holder"><select>
                                                                <option value="static">static</option>
                                                                <option value="relative">relative</option>
                                                                <option value="absolute">absolute</option>
                                                                <option value="fixed">fixed</option>
                                                            </select></span>
                                                        <div class="gjs-sel-arrow">
                                                            <div class="gjs-d-s-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__top">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Top
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__right">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Right
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__left">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Left
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__bottom">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Bottom
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gjs-sm-sector gjs-sm-sector__dimension no-select">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">Dimension</div>
                                        </div>
                                        <div class="gjs-sm-properties" style="display: none;">
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__width">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Width
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gjs-sm-property gjs-sm-integer gjs-sm-property__flex-basis">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Width
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder=""></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__height">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Height
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__max-width">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Max width
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__min-height">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Min height
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="auto"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-composite gjs-sm-property__margin gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Margin
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-composite">
                                                        <span id="gjs-sm-input-holder">
                                                            <div class="gjs-sm-properties">
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__margin-top">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Top
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__margin-right">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Right
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__margin-bottom">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Bottom
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__margin-left">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Left
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-composite gjs-sm-property__padding gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Padding
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-composite">
                                                        <span id="gjs-sm-input-holder">
                                                            <div class="gjs-sm-properties">
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__padding-top">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Top
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__padding-right">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Right
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__padding-bottom">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Bottom
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__padding-left">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Left
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none" data-clear-style="">
                                                                            <svg viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled="" hidden="">
                                                                                        -</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gjs-sm-sector gjs-sm-sector__typography no-select">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">Typography</div>
                                        </div>
                                        <div class="gjs-sm-properties" style="display: none;">
                                            <div class="gjs-sm-property gjs-sm-select gjs-sm-property__font-family">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Font family
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-select">
                                                        <span id="gjs-sm-input-holder"><select>
                                                                <option value="Arial, Helvetica, sans-serif">Arial
                                                                </option>
                                                                <option value="Arial Black, Gadget, sans-serif">Arial
                                                                    Black</option>
                                                                <option value="Brush Script MT, sans-serif">Brush
                                                                    Script MT</option>
                                                                <option value="Comic Sans MS, cursive, sans-serif">
                                                                    Comic Sans MS</option>
                                                                <option value="Courier New, Courier, monospace">Courier
                                                                    New</option>
                                                                <option value="Georgia, serif">Georgia</option>
                                                                <option value="Helvetica, sans-serif">Helvetica
                                                                </option>
                                                                <option value="Impact, Charcoal, sans-serif">Impact
                                                                </option>
                                                                <option
                                                                    value="Lucida Sans Unicode, Lucida Grande, sans-serif">
                                                                    Lucida Sans Unicode</option>
                                                                <option value="Tahoma, Geneva, sans-serif">Tahoma
                                                                </option>
                                                                <option value="Times New Roman, Times, serif">Times New
                                                                    Roman</option>
                                                                <option value="Trebuchet MS, Helvetica, sans-serif">
                                                                    Trebuchet MS</option>
                                                                <option value="Verdana, Geneva, sans-serif">Verdana
                                                                </option>
                                                            </select></span>
                                                        <div class="gjs-sel-arrow">
                                                            <div class="gjs-d-s-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__font-size">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Font size
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="medium"></span>
                                                        <span class="gjs-field-units"><select class="gjs-input-unit">
                                                                <option value="" disabled="" hidden="">
                                                                    -</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gjs-sm-property gjs-sm-select gjs-sm-property__font-weight">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Font weight
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-select">
                                                        <span id="gjs-sm-input-holder"><select>
                                                                <option value="100">Thin</option>
                                                                <option value="200">Extra-Light</option>
                                                                <option value="300">Light</option>
                                                                <option value="400">Normal</option>
                                                                <option value="500">Medium</option>
                                                                <option value="600">Semi-Bold</option>
                                                                <option value="700">Bold</option>
                                                                <option value="800">Extra-Bold</option>
                                                                <option value="900">Ultra-Bold</option>
                                                            </select></span>
                                                        <div class="gjs-sel-arrow">
                                                            <div class="gjs-d-s-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__letter-spacing">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Letter spacing
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="normal"></span>
                                                        <span class="gjs-field-units"><select
                                                                class="gjs-input-unit">
                                                                <option value="" disabled=""
                                                                    hidden="">-</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-color gjs-sm-property__color gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Color
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-color">
                                                        <div class="gjs-input-holder"><input type="text"
                                                                placeholder="black"></div>
                                                        <div class="gjs-field-colorp">
                                                            <div class="gjs-field-colorp-c" data-colorp-c="">
                                                                <div class="gjs-checker-bg"></div>
                                                                <div class="gjs-field-color-picker"
                                                                    style="background-color: black;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__line-height">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Line height
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="normal"></span>
                                                        <span class="gjs-field-units"><select
                                                                class="gjs-input-unit">
                                                                <option value="" disabled=""
                                                                    hidden="">-</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__text-align gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Text align
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-align"
                                                                    id="text-align-left-c2788"
                                                                    name="text-align-c2788" value="left"
                                                                    checked="">
                                                                <label
                                                                    class="fa fa-align-left gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-align-left-c2788"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-align"
                                                                    id="text-align-center-c2788"
                                                                    name="text-align-c2788" value="center">
                                                                <label
                                                                    class="fa fa-align-center gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-align-center-c2788"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-align"
                                                                    id="text-align-right-c2788"
                                                                    name="text-align-c2788" value="right">
                                                                <label
                                                                    class="fa fa-align-right gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-align-right-c2788"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-align"
                                                                    id="text-align-justify-c2788"
                                                                    name="text-align-c2788" value="justify">
                                                                <label
                                                                    class="fa fa-align-justify gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-align-justify-c2788"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__text-decoration gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Text decoration
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-decoration"
                                                                    id="text-decoration-none-c2790"
                                                                    name="text-decoration-c2790" value="none"
                                                                    checked="">
                                                                <label
                                                                    class="fa fa-times gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-decoration-none-c2790"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-decoration"
                                                                    id="text-decoration-underline-c2790"
                                                                    name="text-decoration-c2790" value="underline">
                                                                <label
                                                                    class="fa fa-underline gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-decoration-underline-c2790"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-text-decoration"
                                                                    id="text-decoration-line-through-c2790"
                                                                    name="text-decoration-c2790"
                                                                    value="line-through">
                                                                <label
                                                                    class="fa fa-strikethrough gjs-sm-icon gjs-radio-item-label"
                                                                    for="text-decoration-line-through-c2790"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-stack gjs-sm-property__text-shadow gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Text shadow
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-stack">
                                                        <button type="button" id="gjs-sm-add" data-add-layer="">
                                                            <svg viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div data-layers-wrapper="">
                                                            <div class="gjs-sm-layers gjs-field"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gjs-sm-sector gjs-sm-sector__decorations no-select">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">Decorations</div>
                                        </div>
                                        <div class="gjs-sm-properties" style="display: none;">
                                            <div
                                                class="gjs-sm-property gjs-sm-slider gjs-sm-property__opacity gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Opacity
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-range">
                                                        <input type="range" min="0" max="1"
                                                            step="0.01">
                                                    </div>
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="1"></span>
                                                        <span class="gjs-field-units"></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-composite gjs-sm-property__border-radius gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Border radius
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-composite">
                                                        <span id="gjs-sm-input-holder">
                                                            <div class="gjs-sm-properties">
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__border-top-left-radius">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Top Left
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__border-top-right-radius">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Top Right
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__border-bottom-right-radius">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Bottom Right
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__border-bottom-left-radius">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Bottom Left
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-composite gjs-sm-property__border gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Border
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-composite">
                                                        <span id="gjs-sm-input-holder">
                                                            <div class="gjs-sm-properties">
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__border-width">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Width
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="0"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>em</option>
                                                                                    <option>rem</option>
                                                                                    <option>vh</option>
                                                                                    <option>vw</option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-select gjs-sm-property__border-style">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Style
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-select">
                                                                            <span id="gjs-sm-input-holder"><select>
                                                                                    <option value="none">none
                                                                                    </option>
                                                                                    <option value="solid">solid
                                                                                    </option>
                                                                                    <option value="dotted">dotted
                                                                                    </option>
                                                                                    <option value="dashed">dashed
                                                                                    </option>
                                                                                    <option value="double">double
                                                                                    </option>
                                                                                    <option value="groove">groove
                                                                                    </option>
                                                                                    <option value="ridge">ridge
                                                                                    </option>
                                                                                    <option value="inset">inset
                                                                                    </option>
                                                                                    <option value="outset">outset
                                                                                    </option>
                                                                                </select></span>
                                                                            <div class="gjs-sel-arrow">
                                                                                <div class="gjs-d-s-arrow"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-color gjs-sm-property__border-color gjs-sm-property--full">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Color
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-color">
                                                                            <div class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="black"></div>
                                                                            <div class="gjs-field-colorp">
                                                                                <div class="gjs-field-colorp-c"
                                                                                    data-colorp-c="">
                                                                                    <div class="gjs-checker-bg"></div>
                                                                                    <div class="gjs-field-color-picker"
                                                                                        style="background-color: black;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-stack gjs-sm-property__box-shadow gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Box shadow
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-stack">
                                                        <button type="button" id="gjs-sm-add" data-add-layer="">
                                                            <svg viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div data-layers-wrapper="">
                                                            <div class="gjs-sm-layers gjs-field"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-stack gjs-sm-property__background gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Background
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-stack">
                                                        <button type="button" id="gjs-sm-add" data-add-layer="">
                                                            <svg viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div data-layers-wrapper="">
                                                            <div class="gjs-sm-layers gjs-field"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gjs-sm-sector gjs-sm-sector__extra no-select">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">Extra</div>
                                        </div>
                                        <div class="gjs-sm-properties" style="display: none;">
                                            <div
                                                class="gjs-sm-property gjs-sm-stack gjs-sm-property__transition gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Transition
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-stack">
                                                        <button type="button" id="gjs-sm-add" data-add-layer="">
                                                            <svg viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div data-layers-wrapper="">
                                                            <div class="gjs-sm-layers gjs-field"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-number gjs-sm-integer gjs-sm-property__perspective">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Perspective
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder="0"></span>
                                                        <span class="gjs-field-units"><select
                                                                class="gjs-input-unit">
                                                                <option value="" disabled=""
                                                                    hidden="">-</option>
                                                                <option selected="">px</option>
                                                                <option>%</option>
                                                                <option>em</option>
                                                                <option>rem</option>
                                                                <option>vh</option>
                                                                <option>vw</option>
                                                            </select></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-stack gjs-sm-property__transform gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Transform
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-stack">
                                                        <button type="button" id="gjs-sm-add" data-add-layer="">
                                                            <svg viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <div data-layers-wrapper="">
                                                            <div class="gjs-sm-layers gjs-field"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gjs-sm-sector gjs-sm-sector__flex no-select">
                                        <div class="gjs-sm-sector-title" data-sector-title="">
                                            <div class="gjs-sm-sector-caret"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z"></path>
                                                </svg></div>
                                            <div class="gjs-sm-sector-label">Flex</div>
                                        </div>
                                        <div class="gjs-sm-properties" style="display: none;">
                                            <div class="gjs-sm-property gjs-sm-select gjs-sm-property__display">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Flex Container
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-select">
                                                        <span id="gjs-sm-input-holder"><select>
                                                                <option value="block">Disable</option>
                                                                <option value="flex">Enable</option>
                                                            </select></span>
                                                        <div class="gjs-sel-arrow">
                                                            <div class="gjs-d-s-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-integer gjs-sm-property__label-parent-flex">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Flex Parent
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder=""></span>
                                                        <span class="gjs-field-units"></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__flex-direction gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Direction
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-flex-direction"
                                                                    id="flex-direction-row-c2921"
                                                                    name="flex-direction-c2921" value="row"
                                                                    checked="">
                                                                <label
                                                                    class="icons-flex icon-dir-row gjs-sm-icon gjs-radio-item-label"
                                                                    title="Row"
                                                                    for="flex-direction-row-c2921"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-flex-direction"
                                                                    id="flex-direction-row-reverse-c2921"
                                                                    name="flex-direction-c2921" value="row-reverse">
                                                                <label
                                                                    class="icons-flex icon-dir-row-rev gjs-sm-icon gjs-radio-item-label"
                                                                    title="Row reverse"
                                                                    for="flex-direction-row-reverse-c2921"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-flex-direction"
                                                                    id="flex-direction-column-c2921"
                                                                    name="flex-direction-c2921" value="column">
                                                                <label
                                                                    class="icons-flex icon-dir-col gjs-sm-icon gjs-radio-item-label"
                                                                    title="Column"
                                                                    for="flex-direction-column-c2921"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-flex-direction"
                                                                    id="flex-direction-column-reverse-c2921"
                                                                    name="flex-direction-c2921"
                                                                    value="column-reverse">
                                                                <label
                                                                    class="icons-flex icon-dir-col-rev gjs-sm-icon gjs-radio-item-label"
                                                                    title="Column reverse"
                                                                    for="flex-direction-column-reverse-c2921"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__justify-content gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Justify
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-justify-content"
                                                                    id="justify-content-flex-start-c2923"
                                                                    name="justify-content-c2923" value="flex-start"
                                                                    checked="">
                                                                <label
                                                                    class="icons-flex icon-just-start gjs-sm-icon gjs-radio-item-label"
                                                                    title="Start"
                                                                    for="justify-content-flex-start-c2923"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-justify-content"
                                                                    id="justify-content-flex-end-c2923"
                                                                    name="justify-content-c2923" value="flex-end">
                                                                <label
                                                                    class="icons-flex icon-just-end gjs-sm-icon gjs-radio-item-label"
                                                                    title="End"
                                                                    for="justify-content-flex-end-c2923"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-justify-content"
                                                                    id="justify-content-space-between-c2923"
                                                                    name="justify-content-c2923"
                                                                    value="space-between">
                                                                <label
                                                                    class="icons-flex icon-just-sp-bet gjs-sm-icon gjs-radio-item-label"
                                                                    title="Space between"
                                                                    for="justify-content-space-between-c2923"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-justify-content"
                                                                    id="justify-content-space-around-c2923"
                                                                    name="justify-content-c2923"
                                                                    value="space-around">
                                                                <label
                                                                    class="icons-flex icon-just-sp-ar gjs-sm-icon gjs-radio-item-label"
                                                                    title="Space around"
                                                                    for="justify-content-space-around-c2923"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-justify-content"
                                                                    id="justify-content-center-c2923"
                                                                    name="justify-content-c2923" value="center">
                                                                <label
                                                                    class="icons-flex icon-just-sp-cent gjs-sm-icon gjs-radio-item-label"
                                                                    title="Center"
                                                                    for="justify-content-center-c2923"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__align-items gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Align
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-items"
                                                                    id="align-items-flex-start-c2925"
                                                                    name="align-items-c2925" value="flex-start">
                                                                <label
                                                                    class="icons-flex icon-al-start gjs-sm-icon gjs-radio-item-label"
                                                                    title="Start"
                                                                    for="align-items-flex-start-c2925"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-items"
                                                                    id="align-items-flex-end-c2925"
                                                                    name="align-items-c2925" value="flex-end">
                                                                <label
                                                                    class="icons-flex icon-al-end gjs-sm-icon gjs-radio-item-label"
                                                                    title="End"
                                                                    for="align-items-flex-end-c2925"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-items"
                                                                    id="align-items-stretch-c2925"
                                                                    name="align-items-c2925" value="stretch">
                                                                <label
                                                                    class="icons-flex icon-al-str gjs-sm-icon gjs-radio-item-label"
                                                                    title="Stretch"
                                                                    for="align-items-stretch-c2925"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-items"
                                                                    id="align-items-center-c2925"
                                                                    name="align-items-c2925" value="center"
                                                                    checked="">
                                                                <label
                                                                    class="icons-flex icon-al-center gjs-sm-icon gjs-radio-item-label"
                                                                    title="Center"
                                                                    for="align-items-center-c2925"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-integer gjs-sm-property__label-parent-flex">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Flex Children
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder=""></span>
                                                        <span class="gjs-field-units"></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gjs-sm-property gjs-sm-integer gjs-sm-property__order">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Order
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-integer">
                                                        <span class="gjs-input-holder"><input type="text"
                                                                placeholder=""></span>
                                                        <span class="gjs-field-units"></span>
                                                        <div class="gjs-field-arrows" data-arrows="">
                                                            <div class="gjs-field-arrow-u" data-arrow-up=""></div>
                                                            <div class="gjs-field-arrow-d" data-arrow-down=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-composite gjs-sm-property__flex gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Flex
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-sm-field gjs-sm-composite">
                                                        <span id="gjs-sm-input-holder">
                                                            <div class="gjs-sm-properties">
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-integer gjs-sm-property__flex-grow">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Grow
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder=""></span>
                                                                            <span class="gjs-field-units"></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-integer gjs-sm-property__flex-shrink">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Shrink
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder=""></span>
                                                                            <span class="gjs-field-units"></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="gjs-sm-property gjs-sm-integer gjs-sm-property__flex-basis">
                                                                    <div class="gjs-sm-label" data-sm-label="">
                                                                        <span class="gjs-sm-icon " title="">
                                                                            Basis
                                                                        </span>
                                                                        <div class="gjs-sm-clear"
                                                                            style="display: none"
                                                                            data-clear-style=""><svg
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="currentColor"
                                                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="gjs-fields" data-sm-fields="">
                                                                        <div class="gjs-field gjs-field-integer">
                                                                            <span class="gjs-input-holder"><input
                                                                                    type="text"
                                                                                    placeholder="auto"></span>
                                                                            <span class="gjs-field-units"><select
                                                                                    class="gjs-input-unit">
                                                                                    <option value=""
                                                                                        disabled=""
                                                                                        hidden="">-</option>
                                                                                    <option selected="">px</option>
                                                                                    <option>%</option>
                                                                                    <option></option>
                                                                                </select></span>
                                                                            <div class="gjs-field-arrows"
                                                                                data-arrows="">
                                                                                <div class="gjs-field-arrow-u"
                                                                                    data-arrow-up=""></div>
                                                                                <div class="gjs-field-arrow-d"
                                                                                    data-arrow-down=""></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="gjs-sm-property gjs-sm-radio gjs-sm-property__align-self gjs-sm-property--full">
                                                <div class="gjs-sm-label" data-sm-label="">
                                                    <span class="gjs-sm-icon " title="">
                                                        Align
                                                    </span>
                                                    <div class="gjs-sm-clear" style="display: none"
                                                        data-clear-style=""><svg viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                                <div class="gjs-fields" data-sm-fields="">
                                                    <div class="gjs-field gjs-field-radio">
                                                        <div class="gjs-radio-items">
                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-self"
                                                                    id="align-self-auto-c2950"
                                                                    name="align-self-c2950" value="auto"
                                                                    checked="">
                                                                <label class="gjs-radio-item-label"
                                                                    for="align-self-auto-c2950">Auto</label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-self"
                                                                    id="align-self-flex-start-c2950"
                                                                    name="align-self-c2950" value="flex-start">
                                                                <label
                                                                    class="icons-flex icon-al-start gjs-sm-icon gjs-radio-item-label"
                                                                    title="Start"
                                                                    for="align-self-flex-start-c2950"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-self"
                                                                    id="align-self-flex-end-c2950"
                                                                    name="align-self-c2950" value="flex-end">
                                                                <label
                                                                    class="icons-flex icon-al-end gjs-sm-icon gjs-radio-item-label"
                                                                    title="End"
                                                                    for="align-self-flex-end-c2950"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-self"
                                                                    id="align-self-stretch-c2950"
                                                                    name="align-self-c2950" value="stretch">
                                                                <label
                                                                    class="icons-flex icon-al-str gjs-sm-icon gjs-radio-item-label"
                                                                    title="Stretch"
                                                                    for="align-self-stretch-c2950"></label>
                                                            </div>

                                                            <div class="gjs-radio-item">
                                                                <input type="radio"
                                                                    class="gjs-sm-radio gjs-sm-radio-align-self"
                                                                    id="align-self-center-c2950"
                                                                    name="align-self-c2950" value="center">
                                                                <label
                                                                    class="icons-flex icon-al-center gjs-sm-icon gjs-radio-item-label"
                                                                    title="Center"
                                                                    for="align-self-center-c2950"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gjs-sm-header" style="display: none;">Select an element before using Style
                            Manager</div>
                    </div>
                    <div style="display: block;">
                        <div class="gjs-blocks-cs gjs-one-bg gjs-two-color">
                            <div class="gjs-block-categories">
                                <div class="gjs-block-category">
                                    <div class="gjs-title" data-title="">
                                        <i class="gjs-caret-icon fa fa-caret-right"></i>
                                        Basic
                                    </div>
                                    <div class="gjs-blocks-c" style="display: none;">
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="1 Column"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M2 20h20V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h20a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">1 Column</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="2 Columns"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 23 24">
                                                    <path fill="currentColor"
                                                        d="M2 20h8V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM13 20h8V4h-8v16Zm-1 0V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">2 Columns</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="3 Columns"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 23 24">
                                                    <path fill="currentColor"
                                                        d="M2 20h4V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM17 20h4V4h-4v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1ZM9.5 20h4V4h-4v16Zm-1 0V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">3 Columns</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="2 Columns 3/7"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M2 20h5V4H2v16Zm-1 0V4a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1ZM10 20h12V4H10v16Zm-1 0V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H10a1 1 0 0 1-1-1Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">2 Columns 3/7</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Text"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M18.5,4L19.66,8.35L18.7,8.61C18.25,7.74 17.79,6.87 17.26,6.43C16.73,6 16.11,6 15.5,6H13V16.5C13,17 13,17.5 13.33,17.75C13.67,18 14.33,18 15,18V19H9V18C9.67,18 10.33,18 10.67,17.75C11,17.5 11,17 11,16.5V6H8.5C7.89,6 7.27,6 6.74,6.43C6.21,6.87 5.75,7.74 5.3,8.61L4.34,8.35L5.5,4H18.5Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Text</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Link"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Link</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Image"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M21,3H3C2,3 1,4 1,5V19A2,2 0 0,0 3,21H21C22,21 23,20 23,19V5C23,4 22,3 21,3M5,17L8.5,12.5L11,15.5L14.5,11L19,17H5Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Image</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Video"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Video</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Map"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M20.5,3L20.34,3.03L15,5.1L9,3L3.36,4.9C3.15,4.97 3,5.15 3,5.38V20.5A0.5,0.5 0 0,0 3.5,21L3.66,20.97L9,18.9L15,21L20.64,19.1C20.85,19.03 21,18.85 21,18.62V3.5A0.5,0.5 0 0,0 20.5,3M10,5.47L14,6.87V18.53L10,17.13V5.47M5,6.46L8,5.45V17.15L5,18.31V6.46M19,17.54L16,18.55V6.86L19,5.7V17.54Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Map</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Link Block"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Link Block</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Quote"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M14,17H17L19,13V7H13V13H16M6,17H9L11,13V7H5V13H8L6,17Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Quote</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Text section"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M21,6V8H3V6H21M3,18H12V16H3V18M3,13H21V11H3V13Z"></path>
                                                </svg></div>
                                            <div class="gjs-block-label">Text section</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gjs-block-category">
                                    <div class="gjs-title" data-title="">
                                        <i class="gjs-caret-icon fa fa-caret-right"></i>
                                        Forms
                                    </div>
                                    <div class="gjs-blocks-c" style="display: none;">
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Form"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 5.5c0-.3-.5-.5-1.3-.5H3.4c-.8 0-1.3.2-1.3.5v3c0 .3.5.5 1.3.5h17.4c.8 0 1.3-.2 1.3-.5v-3zM21 8H3V6h18v2zM22 10.5c0-.3-.5-.5-1.3-.5H3.4c-.8 0-1.3.2-1.3.5v3c0 .3.5.5 1.3.5h17.4c.8 0 1.3-.2 1.3-.5v-3zM21 13H3v-2h18v2z">
                                                    </path>
                                                    <rect width="10" height="3" x="2" y="15"
                                                        rx=".5"></rect>
                                                </svg></div>
                                            <div class="gjs-block-label">Form</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Input"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 9c0-.6-.5-1-1.3-1H3.4C2.5 8 2 8.4 2 9v6c0 .6.5 1 1.3 1h17.4c.8 0 1.3-.4 1.3-1V9zm-1 6H3V9h18v6z">
                                                    </path>
                                                    <path d="M4 10h1v4H4z"></path>
                                                </svg></div>
                                            <div class="gjs-block-label">Input</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Textarea"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 7.5c0-.9-.5-1.5-1.3-1.5H3.4C2.5 6 2 6.6 2 7.5v9c0 .9.5 1.5 1.3 1.5h17.4c.8 0 1.3-.6 1.3-1.5v-9zM21 17H3V7h18v10z">
                                                    </path>
                                                    <path d="M4 8h1v4H4zM19 7h1v10h-1zM20 8h1v1h-1zM20 15h1v1h-1z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Textarea</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Select"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 9c0-.6-.5-1-1.3-1H3.4C2.5 8 2 8.4 2 9v6c0 .6.5 1 1.3 1h17.4c.8 0 1.3-.4 1.3-1V9zm-1 6H3V9h18v6z">
                                                    </path>
                                                    <path d="M18.5 13l1.5-2h-3zM4 11.5h11v1H4z"></path>
                                                </svg></div>
                                            <div class="gjs-block-label">Select</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Button"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 9c0-.6-.5-1-1.3-1H3.4C2.5 8 2 8.4 2 9v6c0 .6.5 1 1.3 1h17.4c.8 0 1.3-.4 1.3-1V9zm-1 6H3V9h18v6z">
                                                    </path>
                                                    <path d="M4 11.5h16v1H4z"></path>
                                                </svg></div>
                                            <div class="gjs-block-label">Button</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Label"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M22 11.9c0-.6-.5-.9-1.3-.9H3.4c-.8 0-1.3.3-1.3.9V17c0 .5.5.9 1.3.9h17.4c.8 0 1.3-.4 1.3-.9V12zM21 17H3v-5h18v5z">
                                                    </path>
                                                    <rect width="14" height="5" x="2" y="5"
                                                        rx=".5"></rect>
                                                    <path d="M4 13h1v3H4z"></path>
                                                </svg></div>
                                            <div class="gjs-block-label">Label</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Checkbox"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M10 17l-5-5 1.41-1.42L10 14.17l7.59-7.59L19 8m0-5H5c-1.11 0-2 .89-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5a2 2 0 0 0-2-2z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Checkbox</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Radio"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8m0-18C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2m0 5c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Radio</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gjs-block-category">
                                    <div class="gjs-title" data-title="">
                                        <i class="gjs-caret-icon fa fa-caret-right"></i>
                                        Extra
                                    </div>
                                    <div class="gjs-blocks-c" style="display: none;">
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Countdown"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 20C16.4 20 20 16.4 20 12S16.4 4 12 4 4 7.6 4 12 7.6 20 12 20M12 2C17.5 2 22 6.5 22 12S17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2M17 11.5V13H11V7H12.5V11.5H17Z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Countdown</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Tabs"
                                            draggable="true">
                                            <div class="gjs-block__media">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22 9.3c0-.8-.5-1.3-1.3-1.3H3.4C2.5 8 2 8.5 2 9.3v7.4c0 .8.5 1.3 1.3 1.3h17.4c.8 0 1.3-.5 1.3-1.3V9.3zM21 17H3V9h18v8z"
                                                        fill-rule="nonzero"></path>
                                                    <rect x="3" y="5" width="4" height="2"
                                                        rx=".5"></rect>
                                                    <rect x="8" y="5" width="4" height="2"
                                                        rx=".5"></rect>
                                                    <rect x="13" y="5" width="4" height="2"
                                                        rx=".5"></rect>
                                                </svg>
                                            </div>
                                            <div class="gjs-block-label">Tabs</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Custom Code"
                                            draggable="true">
                                            <div class="gjs-block__media">
                                                <svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M14.6 16.6l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4m-5.2 0L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="gjs-block-label">Custom Code</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Tooltip"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg viewBox="0 0 24 24">
                                                    <path
                                                        d="M4 2h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2h-4l-4 4-4-4H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2m0 2v12h4.83L12 19.17 15.17 16H20V4H4z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Tooltip</div>
                                        </div>
                                        <div class="gjs-block gjs-one-bg gjs-four-color-h" title="Typed"
                                            draggable="true">
                                            <div class="gjs-block__media"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 300 300">
                                                    <path
                                                        d="M212.3 44l2.3 49.6h-6A60 60 0 00204 75c-3.2-6-7.5-10.5-12.9-13.3a44.9 44.9 0 00-21.1-4.3h-29.8V219c0 13 1.4 21 4.2 24.3 4 4.4 10 6.6 18.2 6.6h7.4v5.7H80.2V250h7.5c9 0 15.3-2.7 19-8.2 2.4-3.3 3.5-10.9 3.5-22.7V57.3H84.8a71 71 0 00-21.1 2.2 29 29 0 00-13.9 11.3 46.1 46.1 0 00-6.9 22.8H37L39.5 44h172.8zM245 22h18v256h-18z">
                                                    </path>
                                                </svg></div>
                                            <div class="gjs-block-label">Typed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gjs-blocks-no-cat">
                                <div class="gjs-blocks-c"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="display: none;">
                            <div class="gjs-traits-label">Component settings</div>
                        </div>
                        <div style="display: none;">
                            <div class="trt-header">Select an element before using Trait Manager</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cv-canvas no-touch-actions cv-canvas-bg" style="display: none;">
                <div class="cv-canvas__frames" data-frames="" style="transform: scale(1) translate(0px, 0px);">
                    <div class="cv-canvas__spots" data-spots=""></div>
                    <div class="frames">
                        <div class="frame-wrapper" style="left: 0px; top: 0px;">
                            <div class="frame-wrapper__top gjs-two-color" data-frame-top="">
                                <div class="frame-wrapper__name" data-action-move="">

                                </div>
                                <div class="frame-wrapper__top-r">
                                    <div class="frame-wrapper__icon" data-action-remove="" style="display: none">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper__right" data-frame-right=""></div>
                            <div class="frame-wrapper__left" data-frame-left=""></div>
                            <div class="frame-wrapper__bottom" data-frame-bottom=""></div>
                            <iframe allowfullscreen="allowfullscreen" class="frame"></iframe>
                        </div>
                    </div>
                </div>
                <div id="cv-tools" class="cv-canvas__tools" data-tools="">
                    <div class="tools tools-gl" style="pointer-events:none">
                        <div class="placeholder">
                            <div class="placeholder-int"></div>
                        </div>
                    </div>
                    <div id="tools" style="pointer-events:none">

                        <div class="badge"></div>
                        <div class="ghost"></div>
                        <div class="toolbar" style="pointer-events:all"></div>
                        <div class="resizer"></div>
                        <div class="offset-v"></div>
                        <div class="offset-fixed-v"></div>
                    </div>
                    <div class="tools" style="pointer-events:none; display: none">
                        <div class="highlighter" data-hl=""></div>
                        <div class="badge" data-badge=""></div>
                        <div class="placeholder">
                            <div class="placeholder-int"></div>
                        </div>
                        <div class="ghost"></div>
                        <div class="toolbar" style="pointer-events:all"></div>
                        <div class="resizer"></div>
                        <div class="offset-v" data-offset="">
                            <div class="gjs-marginName" data-offset-m="">
                                <div class="gjs-margin-v-el gjs-margin-v-top" data-offset-m-t=""></div>
                                <div class="gjs-margin-v-el gjs-margin-v-bottom" data-offset-m-b=""></div>
                                <div class="gjs-margin-v-el gjs-margin-v-left" data-offset-m-l=""></div>
                                <div class="gjs-margin-v-el gjs-margin-v-right" data-offset-m-r=""></div>
                            </div>
                            <div class="gjs-paddingName" data-offset-m="">
                                <div class="gjs-padding-v-el gjs-padding-v-top" data-offset-p-t=""></div>
                                <div class="gjs-padding-v-el gjs-padding-v-bottom" data-offset-p-b=""></div>
                                <div class="gjs-padding-v-el gjs-padding-v-left" data-offset-p-l=""></div>
                                <div class="gjs-padding-v-el gjs-padding-v-right" data-offset-p-r=""></div>
                            </div>
                        </div>
                        <div class="offset-fixed-v"></div>
                    </div>
                </div>
                <style data-canvas-style="">
                    .cv-unscale {
                        scale: 1
                    }
                </style>
            </div>
        </div>
        <div class="gjs-mdl-container" style="display: none;">
            <div class="gjs-mdl-dialog gjs-one-bg gjs-two-color">
                <div class="gjs-mdl-header">
                    <div class="gjs-mdl-title"></div>
                    <div class="gjs-mdl-btn-close" data-close-modal="">⨯</div>
                </div>
                <div class="gjs-mdl-content">
                    <div id="gjs-mdl-c"></div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="gjs-mdl-collector" style="display: none"></div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="rgb(0, 0, 0)"
                            data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span
                                class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="rgb(0, 0, 0)"
                            data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span
                                class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="rgb(0, 0, 0)"
                            data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span
                                class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="rgb(0, 0, 0)"
                            data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span
                                class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="rgb(0, 0, 0)"
                            data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span
                                class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div
            class="sp-container sp-hidden sp-light sp-input-disabled sp-alpha-enabled sp-palette-buttons-disabled sp-initial-disabled gjs-one-bg gjs-two-color">
            <div class="sp-palette-container">
                <div class="sp-palette sp-thumb sp-cf">
                    <div class="sp-cf sp-palette-row sp-palette-row-0"></div>
                    <div class="sp-cf sp-palette-row sp-palette-row-selection"></div>
                </div>
                <div class="sp-palette-button-container sp-cf"><button type="button"
                        class="sp-palette-toggle">less</button></div>
            </div>
            <div class="sp-picker-container">
                <div class="sp-top sp-cf">
                    <div class="sp-fill"></div>
                    <div class="sp-top-inner">
                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                            <div class="sp-sat">
                                <div class="sp-val">
                                    <div class="sp-dragger" style="display: block; top: 0px; left: 0px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sp-clear sp-clear-display" title="Clear Color Selection"
                            style="display: none;"></div>
                        <div class="sp-hue">
                            <div class="sp-slider" style="display: block; top: 0px;"></div>
                        </div>
                    </div>
                    <div class="sp-alpha">
                        <div class="sp-alpha-inner"
                            style="background: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255));">
                            <div class="sp-alpha-handle" style="display: block; left: 0px;"></div>
                        </div>
                    </div>
                </div>
                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false">
                </div>
                <div class="sp-initial sp-thumb sp-cf"></div>
                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">⨯</a><button
                        type="button" class="sp-choose">Ok</button></div>
            </div>
        </div>
        <div class="ad-cont">
            <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=grapesjscom"
                id="_carbonads_js"></script> -->
            <div id="native-carbon">
                <script src="https://cdn.carbonads.com/carbon.js?serve=CEAIVK77&amp;placement=grapesjscom" id="_carbonads_js"></script>
            </div>
            <script async="" type="text/javascript" src="{{ asset('certificate/js/carbon-v2.js') }}"></script>
        </div>
    </div>

    <div id="info-panel" style="display:none">
        <br>
        <svg class="info-panel-logo" xmlns="https://www.w3.org/2000/svg" version="1">
            <g id="gjs-logo">
                <path
                    d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2"
                    style="fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:10;stroke:#fff">
                </path>
            </g>
        </svg>
        <br>
        <div class="info-panel-label">
            <b>GrapesJS Webpage Builder</b> is a simple showcase of what is possible to achieve with the
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://github.com/artf/grapesjs">GrapesJS</a>
            core library
            <br><br>
            For any hint about the demo check the
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://github.com/artf/grapesjs-preset-webpage">Webpage Preset repository</a>
            and open an issue. For problems with the builder itself, open an issue on the main
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://github.com/artf/grapesjs">GrapesJS repository</a>
            <br><br>
            Being a free and open source project contributors and supporters are extremely welcome.
            If you like the project support it with a donation of your choice or become a backer/sponsor via
            <a class="info-panel-link gjs-four-color" target="_blank"
                href="https://opencollective.com/grapesjs">Open Collective</a>
        </div>
    </div>

    <script type="text/javascript">
        var lp = './img/';
        var plp = 'https://via.placeholder.com/350x250/';
        var images = [
            lp + 'team1.jpg',
            lp + 'team2.jpg',
            lp + 'team3.jpg',
            plp + '78c5d6/fff',
            plp + '459ba8/fff',
            plp + '79c267/fff',
            plp + 'c5d647/fff',
            plp + 'f28c33/fff',
            plp + 'e868a2/fff',
            plp + 'cc4360/fff',
            lp + 'work-desk.jpg',
            lp + 'phone-app.png',
            lp + 'bg-gr-v.png'
        ];

        var editor = grapesjs.init({
            height: '100%',
            container: '#gjs',
            fromElement: true,
            showOffsets: true,
            assetManager: {
                embedAsBase64: true,
                assets: images
            },
            selectorManager: {
                componentFirst: true
            },
            styleManager: {
                sectors: [{
                    name: 'General',
                    properties: [{
                            extend: 'float',
                            type: 'radio',
                            default: 'none',
                            options: [{
                                    value: 'none',
                                    className: 'fa fa-times'
                                },
                                {
                                    value: 'left',
                                    className: 'fa fa-align-left'
                                },
                                {
                                    value: 'right',
                                    className: 'fa fa-align-right'
                                }
                            ],
                        },
                        'display',
                        {
                            extend: 'position',
                            type: 'select'
                        },
                        'top',
                        'right',
                        'left',
                        'bottom',
                    ],
                }, {
                    name: 'Dimension',
                    open: false,
                    properties: [
                        'width',
                        {
                            id: 'flex-width',
                            type: 'integer',
                            name: 'Width',
                            units: ['px', '%'],
                            property: 'flex-basis',
                            toRequire: 1,
                        },
                        'height',
                        'max-width',
                        'min-height',
                        'margin',
                        'padding'
                    ],
                }, {
                    name: 'Typography',
                    open: false,
                    properties: [
                        'font-family',
                        'font-size',
                        'font-weight',
                        'letter-spacing',
                        'color',
                        'line-height',
                        {
                            extend: 'text-align',
                            options: [{
                                    id: 'left',
                                    label: 'Left',
                                    className: 'fa fa-align-left'
                                },
                                {
                                    id: 'center',
                                    label: 'Center',
                                    className: 'fa fa-align-center'
                                },
                                {
                                    id: 'right',
                                    label: 'Right',
                                    className: 'fa fa-align-right'
                                },
                                {
                                    id: 'justify',
                                    label: 'Justify',
                                    className: 'fa fa-align-justify'
                                }
                            ],
                        },
                        {
                            property: 'text-decoration',
                            type: 'radio',
                            default: 'none',
                            options: [{
                                    id: 'none',
                                    label: 'None',
                                    className: 'fa fa-times'
                                },
                                {
                                    id: 'underline',
                                    label: 'underline',
                                    className: 'fa fa-underline'
                                },
                                {
                                    id: 'line-through',
                                    label: 'Line-through',
                                    className: 'fa fa-strikethrough'
                                }
                            ],
                        },
                        'text-shadow'
                    ],
                }, {
                    name: 'Decorations',
                    open: false,
                    properties: [
                        'opacity',
                        'border-radius',
                        'border',
                        'box-shadow',
                        'background', // { id: 'background-bg', property: 'background', type: 'bg' }
                    ],
                }, {
                    name: 'Extra',
                    open: false,
                    buildProps: [
                        'transition',
                        'perspective',
                        'transform'
                    ],
                }, {
                    name: 'Flex',
                    open: false,
                    properties: [{
                        name: 'Flex Container',
                        property: 'display',
                        type: 'select',
                        defaults: 'block',
                        list: [{
                                value: 'block',
                                name: 'Disable'
                            },
                            {
                                value: 'flex',
                                name: 'Enable'
                            }
                        ],
                    }, {
                        name: 'Flex Parent',
                        property: 'label-parent-flex',
                        type: 'integer',
                    }, {
                        name: 'Direction',
                        property: 'flex-direction',
                        type: 'radio',
                        defaults: 'row',
                        list: [{
                            value: 'row',
                            name: 'Row',
                            className: 'icons-flex icon-dir-row',
                            title: 'Row',
                        }, {
                            value: 'row-reverse',
                            name: 'Row reverse',
                            className: 'icons-flex icon-dir-row-rev',
                            title: 'Row reverse',
                        }, {
                            value: 'column',
                            name: 'Column',
                            title: 'Column',
                            className: 'icons-flex icon-dir-col',
                        }, {
                            value: 'column-reverse',
                            name: 'Column reverse',
                            title: 'Column reverse',
                            className: 'icons-flex icon-dir-col-rev',
                        }],
                    }, {
                        name: 'Justify',
                        property: 'justify-content',
                        type: 'radio',
                        defaults: 'flex-start',
                        list: [{
                            value: 'flex-start',
                            className: 'icons-flex icon-just-start',
                            title: 'Start',
                        }, {
                            value: 'flex-end',
                            title: 'End',
                            className: 'icons-flex icon-just-end',
                        }, {
                            value: 'space-between',
                            title: 'Space between',
                            className: 'icons-flex icon-just-sp-bet',
                        }, {
                            value: 'space-around',
                            title: 'Space around',
                            className: 'icons-flex icon-just-sp-ar',
                        }, {
                            value: 'center',
                            title: 'Center',
                            className: 'icons-flex icon-just-sp-cent',
                        }],
                    }, {
                        name: 'Align',
                        property: 'align-items',
                        type: 'radio',
                        defaults: 'center',
                        list: [{
                            value: 'flex-start',
                            title: 'Start',
                            className: 'icons-flex icon-al-start',
                        }, {
                            value: 'flex-end',
                            title: 'End',
                            className: 'icons-flex icon-al-end',
                        }, {
                            value: 'stretch',
                            title: 'Stretch',
                            className: 'icons-flex icon-al-str',
                        }, {
                            value: 'center',
                            title: 'Center',
                            className: 'icons-flex icon-al-center',
                        }],
                    }, {
                        name: 'Flex Children',
                        property: 'label-parent-flex',
                        type: 'integer',
                    }, {
                        name: 'Order',
                        property: 'order',
                        type: 'integer',
                        defaults: 0,
                        min: 0
                    }, {
                        name: 'Flex',
                        property: 'flex',
                        type: 'composite',
                        properties: [{
                            name: 'Grow',
                            property: 'flex-grow',
                            type: 'integer',
                            defaults: 0,
                            min: 0
                        }, {
                            name: 'Shrink',
                            property: 'flex-shrink',
                            type: 'integer',
                            defaults: 0,
                            min: 0
                        }, {
                            name: 'Basis',
                            property: 'flex-basis',
                            type: 'integer',
                            units: ['px', '%', ''],
                            unit: '',
                            defaults: 'auto',
                        }],
                    }, {
                        name: 'Align',
                        property: 'align-self',
                        type: 'radio',
                        defaults: 'auto',
                        list: [{
                            value: 'auto',
                            name: 'Auto',
                        }, {
                            value: 'flex-start',
                            title: 'Start',
                            className: 'icons-flex icon-al-start',
                        }, {
                            value: 'flex-end',
                            title: 'End',
                            className: 'icons-flex icon-al-end',
                        }, {
                            value: 'stretch',
                            title: 'Stretch',
                            className: 'icons-flex icon-al-str',
                        }, {
                            value: 'center',
                            title: 'Center',
                            className: 'icons-flex icon-al-center',
                        }],
                    }]
                }],
            },
            plugins: [
                'gjs-blocks-basic',
                'grapesjs-plugin-forms',
                'grapesjs-component-countdown',
                'grapesjs-plugin-export',
                'grapesjs-tabs',
                'grapesjs-custom-code',
                'grapesjs-touch',
                'grapesjs-parser-postcss',
                'grapesjs-tooltip',
                'grapesjs-tui-image-editor',
                'grapesjs-typed',
                'grapesjs-style-bg',
                'grapesjs-preset-webpage',
            ],
            pluginsOpts: {
                'gjs-blocks-basic': {
                    flexGrid: true
                },
                'grapesjs-tui-image-editor': {
                    script: [
                        // 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
                        'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
                        'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
                        'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
                    ],
                    style: [
                        'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
                        'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
                    ],
                },
                'grapesjs-tabs': {
                    tabsBlock: {
                        category: 'Extra'
                    }
                },
                'grapesjs-typed': {
                    block: {
                        category: 'Extra',
                        content: {
                            type: 'typed',
                            'type-speed': 40,
                            strings: [
                                'Text row one',
                                'Text row two',
                                'Text row three',
                            ],
                        }
                    }
                },
                'grapesjs-preset-webpage': {
                    modalImportTitle: 'Import Template',
                    modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
                    modalImportContent: function(editor) {
                        return editor.getHtml() + '<style>' + editor.getCss() + '</style>'
                    },
                },
            },
        });

        editor.I18n.addMessages({
            en: {
                styleManager: {
                    properties: {
                        'background-repeat': 'Repeat',
                        'background-position': 'Position',
                        'background-attachment': 'Attachment',
                        'background-size': 'Size',
                    }
                },
            }
        });

        var pn = editor.Panels;
        var modal = editor.Modal;
        var cmdm = editor.Commands;

        // Update canvas-clear command
        cmdm.add('canvas-clear', function() {
            if (confirm('Are you sure to clean the canvas?')) {
                editor.runCommand('core:canvas-clear')
                setTimeout(function() {
                    localStorage.clear()
                }, 0)
            }
        });

        // Add info command
        var mdlClass = 'gjs-mdl-dialog-sm';
        var infoContainer = document.getElementById('info-panel');

        cmdm.add('open-info', function() {
            var mdlDialog = document.querySelector('.gjs-mdl-dialog');
            mdlDialog.className += ' ' + mdlClass;
            infoContainer.style.display = 'block';
            modal.setTitle('About this demo');
            modal.setContent(infoContainer);
            modal.open();
            modal.getModel().once('change:open', function() {
                mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
            })
        });

        pn.addButton('options', {
            id: 'open-info',
            className: 'fa fa-question-circle',
            command: function() {
                editor.runCommand('open-info')
            },
            attributes: {
                'title': 'About',
                'data-tooltip-pos': 'bottom',
            },
        });


        // Simple warn notifier
        var origWarn = console.warn;
        toastr.options = {
            closeButton: true,
            preventDuplicates: true,
            showDuration: 250,
            hideDuration: 150
        };
        console.warn = function(msg) {
            if (msg.indexOf('[undefined]') == -1) {
                toastr.warning(msg);
            }
            origWarn(msg);
        };


        // Add and beautify tooltips
        [
            ['sw-visibility', 'Show Borders'],
            ['preview', 'Preview'],
            ['fullscreen', 'Fullscreen'],
            ['export-template', 'Export'],
            ['undo', 'Undo'],
            ['redo', 'Redo'],
            ['gjs-open-import-webpage', 'Import'],
            ['canvas-clear', 'Clear canvas']
        ]
        .forEach(function(item) {
            pn.getButton('options', item[0]).set('attributes', {
                title: item[1],
                'data-tooltip-pos': 'bottom'
            });
        });
        [
            ['open-sm', 'Style Manager'],
            ['open-layers', 'Layers'],
            ['open-blocks', 'Blocks']
        ]
        .forEach(function(item) {
            pn.getButton('views', item[0]).set('attributes', {
                title: item[1],
                'data-tooltip-pos': 'bottom'
            });
        });
        var titles = document.querySelectorAll('*[title]');

        for (var i = 0; i < titles.length; i++) {
            var el = titles[i];
            var title = el.getAttribute('title');
            title = title ? title.trim() : '';
            if (!title)
                break;
            el.setAttribute('data-tooltip', title);
            el.setAttribute('title', '');
        }


        // Store and load events
        editor.on('storage:load', function(e) {
            console.log('Loaded ', e)
        });
        editor.on('storage:store', function(e) {
            console.log('Stored ', e)
        });


        // Do stuff on load
        editor.on('load', function() {
            var $ = grapesjs.$;

            // Show borders by default
            pn.getButton('options', 'sw-visibility').set('active', 1);

            // Show logo with the version
            var logoCont = document.querySelector('.gjs-logo-cont');
            document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
            var logoPanel = document.querySelector('.gjs-pn-commands');
            logoPanel.appendChild(logoCont);


            // Load and show settings and style manager
            var openTmBtn = pn.getButton('views', 'open-tm');
            openTmBtn && openTmBtn.set('active', 1);
            var openSm = pn.getButton('views', 'open-sm');
            openSm && openSm.set('active', 1);

            // Remove trait view
            pn.removeButton('views', 'open-tm');

            // Add Settings Sector
            var traitsSector = $('<div class="gjs-sm-sector no-select">' +
                '<div class="gjs-sm-sector-title"><span class="icon-settings fa fa-cog"></span> <span class="gjs-sm-sector-label">Settings</span></div>' +
                '<div class="gjs-sm-properties" style="display: none;"></div></div>');
            var traitsProps = traitsSector.find('.gjs-sm-properties');
            traitsProps.append($('.gjs-trt-traits'));
            $('.gjs-sm-sectors').before(traitsSector);
            traitsSector.find('.gjs-sm-sector-title').on('click', function() {
                var traitStyle = traitsProps.get(0).style;
                var hidden = traitStyle.display == 'none';
                if (hidden) {
                    traitStyle.display = 'block';
                } else {
                    traitStyle.display = 'none';
                }
            });

            // Open block manager
            var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
            openBlocksBtn && openBlocksBtn.set('active', 1);

            // Move Ad
            $('#gjs').append($('.ad-cont'));
        });

        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-74284223-1', 'auto');
        ga('send', 'pageview');

        document.getElementById('save-button').addEventListener('click', function()
        {
        var template_html = document.getElementById('template_html');
        var template_css = document.getElementById('template_css');

        template_html.value = editor.getHtml();
        template_css.value = editor.getCss();
        $('#form-template').submit();
        });
    </script>

    {{-- <script>
    function handleSubmit(event) {
    // event.preventDefault(); // Menghentikan perilaku bawaan dari form

    // Mendapatkan nilai dari input HTML dan CSS
    const htmlContent = document.getElementById('template_html').value;
    const cssContent = document.getElementById('template_css').value;
    // const textareaValue = document.querySelector('textarea');
    // const cssContent = document.getElementById('gjs-cm-code').value;

    // Disini Anda dapat menambahkan logika sesuai kebutuhan, misalnya mengirimkan nilai-nilai tersebut ke server atau melakukan manipulasi lainnya
    // Contoh:
    console.log('HTML Content:', htmlContent);
    console.log('CSS Content:', cssContent);

    // Setelah mendapatkan nilai, Anda dapat memanggil fungsi h dengan mengirimkan nilai-nilai tersebut sebagai argumen
    // h({
    //     getHtml: function () {
    //         return htmlContent;
    //     },
    //     getCss: function () {
    //         return cssContent;
    //     }
    // });

    // Setelah menjalankan logika yang diperlukan, Anda dapat melakukan operasi tambahan, misalnya menampilkan pesan sukses atau membersihkan formulir
    // Contoh:
    alert('Formulir berhasil dikirim!');
    // document.getElementById('templateForm').reset(); // Mengosongkan formulir jika diperlukan
}
    </script> --}}


</body>

</html>
