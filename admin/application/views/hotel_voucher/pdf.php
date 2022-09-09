<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        @import url("http://fonts.googleapis.com/css?family=Poppins|Roboto");
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400");

        * {
            box-sizing: border-box;
        }

        .card {
            position: relative;
            display: flex;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 0;
            margin-bottom: 24px;
            -webkit-box-shadow: none;
            box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
        }

        .card-box {
            background: #fff;
            min-height: 50px;
            box-shadow: none;
            position: relative;
            margin-bottom: 20px;
            transition: .5s;
            border: 1px solid #f2f2f2;
            border-radius: 10px;
        }

        .col-md-12 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 768px) {
            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .page-content {
            margin-top: 0;
            padding: 0;
            background-color: #eaeef3;
        }

        @media (min-width: 992px) {
            .page-content-wrapper .page-content {
                margin-left: 235px;
                margin-top: 0;
                min-height: 600px;
                padding: 25px 20px 10px;
            }
        }

        @media (min-width: 992px) {
            .page-content-wrapper {
                float: left;
                width: 100%;
            }
        }

        .page-container {
            margin: 0;
            padding: 0;
            position: relative;
            background-color: #222c3c;
        }

        .page-header-fixed .page-container {
            margin-top: 50px;
        }

        .dark-sidebar-color .page-container {
            background-color: #3a3f51;
        }

        body {
            margin: 0 !important;
            font-family: Poppins, sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.7;
            color: rgba(0, 0, 0, .87);
            text-align: left;
            background-color: #f9f9fa;
            width: 100%;
            min-height: 100%;
            padding: 10px;
        }

        html {
            font-family: "Helvetica", "Arial", sans-serif;
            line-height: 20px;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            color: rgba(0, 0, 0, .87);
            width: 100%;
            height: 100%;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            font-size: 14px;
            font-weight: 400;
        }

        :root {
            --ck-z-default: 1;
            --ck-color-base-foreground: #fafafa;
            --ck-color-base-background: #fff;
            --ck-color-base-border: #c4c4c4;
            --ck-color-base-action: #61b045;
            --ck-color-base-text: #333;
            --ck-color-base-active: #198cf0;
            --ck-color-base-active-focus: #0e7fe1;
            --ck-color-base-error: #db3700;
            --ck-color-focus-border-coordinates: 208, 79%, 51%;
            --ck-color-focus-border: hsl(var(--ck-color-focus-border-coordinates));
            --ck-color-focus-outer-shadow: #bcdefb;
            --ck-color-focus-disabled-shadow: rgba(119, 186, 248, .3);
            --ck-color-focus-error-shadow: rgba(255, 64, 31, .3);
            --ck-color-text: var(--ck-color-base-text);
            --ck-color-shadow-drop: rgba(0, 0, 0, .15);
            --ck-color-shadow-drop-active: rgba(0, 0, 0, .2);
            --ck-color-shadow-inner: rgba(0, 0, 0, .1);
            --ck-color-button-default-hover-background: #e6e6e6;
            --ck-color-button-action-background: var(--ck-color-base-action);
            --ck-focus-outer-shadow-geometry: 0 0 0 3px;
            --ck-line-height-base: 1.84615;
            --ck-font-size-normal: 1em;
            --ck-border-radius: 2px;
            --ck-spacing-unit: 0.6em;
            --ck-spacing-medium: calc(var(--ck-spacing-unit)*0.8);
            --ck-spacing-small: calc(var(--ck-spacing-unit)*0.5);
            --ck-icon-size: calc(var(--ck-line-height-base)*var(--ck-font-size-normal));
            --ck-switch-button-toggle-width: 2.6153846154em;
            --ck-switch-button-toggle-inner-size: 1.0769230769em;
            --ck-switch-button-toggle-spacing: 1px;
            --ck-input-width: 18em;
            --ck-color-widget-blurred-border: #dedede;
            --ck-color-widget-hover-border: #ffc83d;
            --ck-resizer-size: 10px;
            --ck-image-style-spacing: 1.5em;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 10px 24px 14px 24px;
            position: relative;
        }

        .card-body:last-child {
            border-radius: 0 0 2px 2px;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        .card-body:before,
        .card-body:after {
            content: " ";
            display: table;
        }

        .card-body:after {
            clear: both;
        }

        :selection {
            background: #b3d4fc;
            text-shadow: none;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .bg-primary {
            background-color: #9c78cd;
            color: #fff;
        }

        .card-box:hover {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
            -moz-box-shadow: 0 20px 20px rgba(0, 0, 0, .1);
            webkit-box-shadow: 0 0 25px -5px #9e9c9e;
            box-shadow: 0 0 25px -5px #9e9c9e;

        }

        .col-xl-12 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 1200px) {
            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        hr {
            box-sizing: content-box;
            height: 1px;
            overflow: visible;
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid #eee;
            display: block;
            margin: 20px 0;
            padding: 0;
            border-bottom: 0;
        }

        .bg-dark {
            background-color: #2b2b2c;
            color: #fff;
        }

        .border {
            border: 1px solid #dee2e6 !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border {
            border: 1px solid red;
        }

        .w-100 {
            width: 100% !important;
        }

        table {
            border-collapse: collapse;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        button {
            border-radius: 0;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            overflow: visible;
            text-transform: none;
            outline: 0 !important;
        }

        [type="button"],
        button {
            -webkit-appearance: button;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .float-right {
            float: right !important;
        }

        .btn {
            box-shadow: 0 1px 3px rgba(0, 0, 0, .1), 0 1px 2px rgba(0, 0, 0, .18);
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            text-transform: uppercase;
            outline: 0 !important;
        }

        .btn-primary {
            background-color: #188ae2 !important;
            border: 1px solid #188ae2 !important;
            color: #fff !important;
        }

        .btn {
            font-size: 12px;
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            -ms-border-radius: 2px;
            -o-border-radius: 2px;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
            padding: 8px 14px 7px;
            margin: 6px 5px 10px 24px;
        }

        [type="button"]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        .btn:hover {
            color: #212529;
            text-decoration: none;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn:hover {
            transition: all .3s;
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:active,
        .btn-primary:hover {
            background-color: #167ccb !important;
            border: 1px solid #167ccb !important;
            color: #fff !important;
        }

        .btn:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, .2), 0 3px 6px rgba(0, 0, 0, .26);
        }

        .btn-info {
            color: #fff !important;
            background-color: #2CA8FF !important;
            border-color: #17a2b8;
            border: 1px solid #2CA8FF !important;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-info:hover,
        .btn-info:active,
        .btn-info:active,
        .btn-info:hover {
            background-color: #2CA8FF !important;
            border: 1px solid #2CA8FF !important;
            color: #fff !important;
        }

        h4 {
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: 300;
            line-height: 32px;
            font-size: 18px !important;
            padding: 0;
            font-family: Poppins, sans-serif;
            -moz-osx-font-smoothing: grayscale;
            margin: 24px 0 16px;
        }

        .text-center {
            text-align: center !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-center {
            text-align: center;
        }

        .text-white {
            color: #ffffff;
        }

        .form-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }

        .rounded-lg {
            border-radius: .3rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            overflow: auto;
            resize: none;
        }

        .cke {
            visibility: hidden;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            -ms-border-radius: 2px;
            -o-border-radius: 2px;
            border-radius: 2px;
        }

        .cke_reset {
            background-image: none !important;
            filter: none;
            border-top: 0;
            border-bottom: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
            margin: 0;
            padding: 0;
            border: 0;
            background: transparent;
            text-decoration: none;
            width: auto;
            height: auto;
            vertical-align: baseline;
            box-sizing: content-box;
            position: static;
            transition: none;
        }

        .cke_chrome {
            display: block;
            border: 1px solid #d1d1d1;
            padding: 0;
            visibility: inherit;
        }

        .col {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .form-row>.col {
            padding-right: 5px;
            padding-left: 5px;
        }

        .cke_voice_label {
            display: none;
        }

        .cke_inner,
        .cke_reset {
            background-image: none !important;
            filter: none;
            border-top: 0;
            border-bottom: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
        }

        .cke_inner {
            display: block;
            background: #fff;
            padding: 0;
            -webkit-touch-callout: none;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
            font-weight: 400;
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-xl-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 1200px) {
            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        input {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            overflow: visible;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            background-image: none;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: none !important;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            outline: 0 !important;
        }

        th {
            text-align: inherit;
        }

        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table-bordered thead th {
            border-bottom-width: 2px;
        }

        .table thead th {
            border-top: 0;
            border-bottom-width: 1px;
            font-weight: 500;
            font-size: .875rem;
            text-transform: uppercase;
        }

        .table thead tr th {
            font-size: 14px;
            font-weight: 600;
        }

        .table th,
        .table th {
            padding: 10px 8px;
            vertical-align: middle;
        }

        .table.table-bordered thead>tr>th {
            border-bottom: 0;
        }

        .table td {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table td {
            font-size: 0.875rem;
            padding: .475rem 0.4375rem;
        }

        .table td,
        .table td {
            padding: 10px 8px;
            vertical-align: middle;
        }

        .cke_top {
            background-image: none !important;
            filter: none;
            border-top: 0;
            border-bottom: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
        }

        .cke_reset_all {
            margin: 0;
            padding: 0;
            border: 0;
            background: transparent;
            text-decoration: none;
            width: auto;
            height: auto;
            vertical-align: baseline;
            box-sizing: content-box;
            position: static;
            transition: none;
            border-collapse: collapse;
            font: normal normal normal 12px Arial, Helvetica, Tahoma, Verdana, Sans-Serif;
            color: #000;
            text-align: left;
            white-space: nowrap;
            cursor: auto;
            float: none;
        }

        .cke_top {
            display: block;
            overflow: hidden;
            border-bottom: 1px solid #d1d1d1;
            background: #f8f8f8;
            padding: 6px 8px 2px;
            white-space: normal;
        }

        .cke_contents {
            display: block;
            overflow: hidden;
        }

        .cke_bottom {
            background-image: none !important;
            filter: none;
            border-top: 1px solid #d1d1d1;
            border-bottom: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
            display: block;
            overflow: hidden;
            padding: 6px 8px 2px;
            position: relative;
            background: #f8f8f8;
        }

        .cke_reset_all * {
            margin: 0;
            padding: 0;
            border: 0;
            background: transparent;
            text-decoration: none;
            width: auto;
            height: auto;
            vertical-align: baseline;
            box-sizing: content-box;
            position: static;
            transition: none;
            border-collapse: collapse;
            font: normal normal normal 12px Arial, Helvetica, Tahoma, Verdana, Sans-Serif;
            color: #000;
            text-align: left;
            white-space: nowrap;
            cursor: auto;
            float: none;
        }

        iframe {
            vertical-align: middle;
            display: block;
            width: 100%;
            border: none;
        }

        .cke_wysiwyg_frame {
            background-color: #fff;
        }

        .cke_resizer {
            width: 0;
            height: 0;
            overflow: hidden;
            border-width: 10px 10px 0 0;
            border-color: transparent #bcbcbc transparent transparent;
            border-style: dashed solid dashed dashed;
            font-size: 0;
            vertical-align: bottom;
            margin-top: 6px;
            margin-bottom: 2px;
        }

        .cke_resizer_ltr {
            cursor: se-resize;
            float: right;
            margin-right: -4px;
        }

        .cke_path {
            float: left;
            margin: -2px 0 2px;
        }

        .cke_toolbar {
            background-image: none !important;
            filter: none !important;
            border: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            float: left;
        }

        .cke_toolbar_break {
            background-image: none !important;
            filter: none !important;
            border: 0;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            -ms-box-shadow: none !important;
            -o-box-shadow: none !important;
            display: block;
            clear: left;
        }

        span.cke_path_empty {
            display: inline-block;
            float: left;
            padding: 3px 4px;
            margin-right: 2px;
            cursor: default;
            text-decoration: none;
            outline: 0;
            border: 0;
            color: #484848;
            font-weight: bold;
            font-size: 11px;
        }

        .cke_toolgroup {
            background-image: none !important;
            filter: none !important;
            border: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            float: left;
            margin: 1px 2px 6px 0;
            padding-right: 3px;
        }

        .cke_combo {
            display: inline-block;
            float: left;
            position: relative;
            margin-bottom: 5px;
        }

        .cke_combo:after {
            content: "";
            position: absolute;
            height: 18px;
            width: 0;
            border-right: 1px solid #bcbcbc;
            margin-top: 5px;
            top: 0;
            right: 0;
        }

        .cke_toolbar .cke_combo+.cke_toolbar_end {
            margin-right: 0;
            margin-left: 2px;
        }

        a {
            color: #337ab7;
            text-decoration: none;
            background-color: transparent;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            font-weight: 500;
            text-shadow: none;
        }

        .cke_button {
            background-image: none !important;
            filter: none;
            border: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
        }

        .cke_reset_all *,
        .cke_reset_all a {
            margin: 0;
            padding: 0;
            border: 0;
            background: transparent;
            text-decoration: none;
            width: auto;
            height: auto;
            vertical-align: baseline;
            box-sizing: content-box;
            position: static;
            transition: none;
            border-collapse: collapse;
            font: normal normal normal 12px Arial, Helvetica, Tahoma, Verdana, Sans-Serif;
            color: #000;
            text-align: left;
            white-space: nowrap;
            cursor: auto;
            float: none;
        }

        a.cke_button {
            display: inline-block;
            height: 18px;
            padding: 4px 6px;
            outline: 0;
            cursor: default;
            float: left;
            border: 0;
            position: relative;
        }

        a:hover {
            color: #23527c;
            text-decoration: underline;
            cursor: pointer;
        }

        a:active,
        a:hover {
            outline: 0;
            text-decoration: none;
        }

        .cke_button:hover {
            background-color: #ddd;
        }

        a.cke_button_disabled:hover,
        a.cke_button_disabled:active {
            border: 0;
            padding: 4px 6px;
            background-color: transparent;
        }

        a.cke_button_off:hover,
        a.cke_button_off:active {
            background: #e5e5e5;
            border: 1px #bcbcbc solid;
            padding: 3px 5px;
        }

        .cke_toolbar_separator {
            float: left;
            background-color: #bcbcbc;
            margin: 4px 2px 0 2px;
            height: 18px;
            width: 1px;
        }

        .cke_toolgroup a.cke_button:last-child:after,
        .cke_toolgroup a.cke_button.cke_button_disabled:hover:last-child:after {
            content: "";
            position: absolute;
            height: 18px;
            width: 0;
            border-right: 1px solid #bcbcbc;
            margin-top: 4px;
            top: 0;
            right: -3px;
        }

        .cke_toolgroup a.cke_button:hover:last-child:after,
        a.cke_button:focus:last-child:after,
        a.cke_button.cke_button_on:last-child:after {
            top: -1px;
            right: -4px;
        }

        a.cke_button_expandable {
            padding: 4px 5px;
        }

        a.cke_button_expandable.cke_button_off:hover,
        a.cke_button_expandable.cke_button_off:active {
            padding: 3px 4px;
        }

        .cke_combo_label {
            display: none;
            float: left;
            line-height: 26px;
            vertical-align: top;
            margin-right: 5px;
        }

        .cke_combo_button {
            background-image: none !important;
            filter: none;
            border: 0;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none;
        }

        a.cke_combo_button {
            cursor: default;
            display: inline-block;
            float: left;
            margin: 0;
            padding: 1px;
        }

        .cke_combo_button:hover {
            background-color: #ddd;
        }

        .cke_combo_off a.cke_combo_button:hover,
        .cke_combo_off a.cke_combo_button:active {
            background: #e5e5e5;
            border: 1px solid #bcbcbc;
            padding: 0 0 0 1px;
            margin-left: -1px;
        }

        .cke_toolbar_start+.cke_combo_off a.cke_combo_button:hover,
        .cke_toolbar_start+.cke_combo_off a.cke_combo_button:active {
            padding: 0 0 0 3px;
            margin-left: -3px;
        }

        .cke_toolbar.cke_toolbar_last .cke_toolgroup a.cke_button:last-child:after {
            content: none;
            border: 0;
            width: 0;
            height: 0;
        }

        .cke_button_icon {
            cursor: inherit;
            background-repeat: no-repeat;
            margin-top: 1px;
            width: 16px;
            height: 16px;
            float: left;
            display: inline-block;
            background-repeat-x: no-repeat;
            background-repeat-y: no-repeat;
        }

        .cke_ltr .cke_button__cut_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -264px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -264px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        a.cke_button_disabled .cke_button_icon {
            opacity: .3;
        }

        .cke_button_label {
            display: none;
            padding-left: 3px;
            margin-top: 1px;
            line-height: 17px;
            vertical-align: middle;
            float: left;
            cursor: default;
            color: #484848;
        }

        .cke_ltr .cke_button__copy_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -216px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -216px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__paste_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -312px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -312px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__pastetext_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -720px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -720px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__pastefromword_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -768px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -768px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__undo_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -1008px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -1008px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__redo_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -960px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -960px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__scayt_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -888px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -888px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button_arrow {
            display: inline-block;
            margin: 8px 0 0 3px;
            width: 0;
            height: 0;
            cursor: default;
            vertical-align: top;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 3px solid #484848;
        }

        .cke_button__link_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -528px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -528px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__unlink_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -552px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -552px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__anchor_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -504px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -504px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__image_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -360px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -360px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__table_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -912px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -912px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__horizontalrule_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -336px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -336px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__specialchar_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -864px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -864px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__maximize_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -672px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -672px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__source_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -840px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -840px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__source_label {
            display: inline;
        }

        .cke_button__bold_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -24px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -24px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__italic_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -48px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -48px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__strike_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -72px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -72px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__removeformat_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -792px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -792px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__numberedlist_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -648px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -648px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__bulletedlist_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -600px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -600px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__outdent_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -456px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -456px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_ltr .cke_button__indent_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -408px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -408px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_button__blockquote_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -168px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: -168px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_combo_text {
            line-height: 26px;
            padding-left: 10px;
            text-overflow: ellipsis;
            overflow: hidden;
            float: left;
            cursor: default;
            color: #484848;
            width: 60px;
        }

        .cke_combo_open {
            cursor: default;
            display: inline-block;
            font-size: 0;
            height: 19px;
            line-height: 17px;
            margin: 1px 10px 1px;
            width: 5px;
        }

        .cke_button__about_icon {
            background: url(http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f) no-repeat 0 -0px !important;
            background-image: url("http://localhost/yrpit/travelcrm/public/ckeditor/skins/moono-lisa/icons.png?t=5fe059002f") !important;
            background-position-x: 0px !important;
            background-position-y: 0px !important;
            background-size: initial !important;
            background-repeat-x: no-repeat !important;
            background-repeat-y: no-repeat !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: initial !important;
        }

        .cke_combo_arrow {
            cursor: default;
            margin: 11px 0 0;
            float: left;
            height: 0;
            width: 0;
            font-size: 0;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 3px solid #484848;
        }
    </style>
</head>

<body>
				<div class="col-md-12">
					<div class="card card-box">
						<div class="card-head">
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>

						<div class="card-body ">

							<form action="<?php echo site_url(); ?>HotelVoucher/searchDetails" method="post">
								<label style="margin-left: 30px;" class="input">
									<?php if (isset($query_id)) : ?>
										<input style="height: 36px;" class="input__field" value="<?php echo $query_id ?>" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php else : ?>
										<input style="height: 36px;" class="input__field" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php endif ?>

								</label>
								<button type="submit" class="btn btn-success">Search</button>
							</form>
						</div>
						<?php if (isset($details)) : ?>
							<div id="print_content" class="card">
								<form id="submtVoucherbtn">
									<!-- <form action="<php echo site_url(); ?>HotelVoucher/submitVoucherDetails" method="post"> -->
									<div class="card-body">
										<div class="container mb-5 mt-3">
											<div class="row d-flex align-items-baseline bg-primary">
												<hr>
												<div class="col-xl-12">
													<h4 class="text-white text-center ">Voucher / Accommodation</h4>
												</div>
											</div>
											<div class="mt-3 row d-flex align-items-baseline bg-primary">
												<div class="col-xl-12">
													<h4 class="text-white text-center">Booking - Voucher - Hotel</h4>
												</div>
											</div>

											<div class="mt-3 row d-flex align-items-baseline bg-primary">
												<div class="col-xl-12">
													<h4 class="text-white">Hotel Details</h4>
												</div>
											</div>

											<?php foreach ($hotel as $key => $value) : ?>
												<div class="mt-3 row d-flex align-items-baseline ">
													<div class="bg-dark col-xl-12">
														<div id="HD_header" class="form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class="col-form-label text-white">Hotel Name:</label>
																<label style="flex: 0 0 50%; max-width: 50%;" class="col-form-label col-xl-6 mx-3 text-white"><?php echo $value->hotel_name; ?></label>
															</div>
															<div class="col d-flex">
																<label for="" class=" col-form-label text-white">Confirmation Number:</label>
																<input required style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" name="conf_number[<?php echo $key; ?>]" placeholder="Enter Confirmatin Number Here">
																<!-- <input type="hidden" id="query-id" name="query_id" value=<?php echo $query_id; ?>> -->
																<input type="hidden" name="hotel_id[<?php echo $key; ?>]" value=<?php echo $value->id; ?>>
															</div>
														</div>
													</div>
													<div class="border border-bottom-0 border-top-0 col-xl-12">
														<div class=" form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class=" col-form-label">Check-in</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $value->checkin; ?>>
															</div>
															<?php
															$date = new DateTime($value->checkin);
															$date->modify('+' . $value->nights . ' day');
															$checkout =  $date->format('Y-m-d');
															?>
															<div class="col d-flex">
																<label for="" class=" col-form-label">Check-out</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $checkout; ?>>
															</div>
														</div>

													</div>
													<div class="w-100">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th scope="col">Room Type</th>
																	<th scope="col">Adults</th>
																	<th scope="col">Children</th>
																	<th scope="col">Children Ages</th>
																	<th scope="col">Board</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><?php echo $value->room_type; ?></td>
																	<td><?php echo $details->adult; ?></td>
																	<td><?php echo $details->child; ?></td>
																	<td>--</td>
																	<td><input type="text" class="form-control" name="board[<?php echo $key; ?>]"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											<?php endforeach; ?>
											<!-- endforech -->
											<div class="mt-3 row d-flex align-items-baseline bg-primary">
												<div class="col-xl-12">
													<h4 class="text-white">Guest Details</strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex align-items-baseline">
												<table class="table table-bordered col-xl-12 mt-3">
													<thead>
														<tr>
															<th scope="col">Guest Name:</th>
															<th scope="col">Nationality: </th>
															<th scope="col">Guest Email Id:</th>
															<th scope="col">Guest Mobile No:</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php echo $guest->b2bfirstName . ' ' . $guest->b2blastName ?></td>
															<td>indian</td>
															<td><?php echo $guest->b2bEmail ?></td>
															<td><?php echo $guest->b2bmobileNumber ?></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="mt-3 row d-flex align-items-baseline bg-primary">
												<div class="col-xl-12">
													<h4 style="color: white;" class="text-white">Important Information : Hotel</strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex">
												<div class="col-xl-12">
													<textarea name="impInfo"></textarea>
												</div>
											</div>

										</div>
										<div id="action_btns" class="mt-3 d-flex align-items-baseline">
											<div class="col-xl-12">
												<!-- <button id="submtVoucherbtn" type="button" class="float-right btn btn-primary">Submit</button> -->
												<button onclick="subVoucherAjax()" id="submtVoucherForm1" type="button" class="float-right btn btn-primary">Submit</button>
												<button onclick="printVoucher()" id="submtVoucherForm2" type="button" class="float-right btn btn-info">Print</button>
												<button id="genPDF" onclick="Convert_HTML_To_PDF()" type="button" class="float-right btn btn-info">PDF</button>
												<button onclick="sendEmail()" id="submtVoucherForm" type="button" class="float-right btn btn-primary">Send Mail to Customer</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>

            </body>

</html>