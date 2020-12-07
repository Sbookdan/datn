@extends('layouts.layout')

@section('title', 'Profile Edit')

@section('css')
<style>
    address {
        font-style: normal;
        line-height: inherit;
        margin-bottom: 1rem;
    }


    @media screen and (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover,
    .btn:focus {
        text-decoration: none;
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:disabled {
        opacity: .65;
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    .btn:not(:disabled):not(.disabled):active {
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
    }

    .btn-primary {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-primary:hover {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
    }

    .btn-primary:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
    }

    .btn-primary:disabled {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
    }

    .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #5e72e4;
        background-color: #324cdd;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
    }

    .btn-info {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-info:hover {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
    }

    .btn-info:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
    }

    .btn-info:disabled {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
    }

    .btn-info:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #11cdef;
        background-color: #0da5c0;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
    }

    .btn-default {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-default:hover {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
    }

    .btn-default:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
    }

    .btn-default:disabled {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
    }

    .btn-default:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #172b4d;
        background-color: #0b1526;
    }

    .btn-default:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
    }

    .btn-sm {
        font-size: .875rem;
        line-height: 1.5;
        padding: .25rem .5rem;
        border-radius: .375rem;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        font-size: 1rem;
        position: absolute;
        z-index: 1000;
        top: 100%;
        left: 0;
        display: none;
        float: left;
        min-width: 10rem;
        margin: .125rem 0 0;
        padding: .5rem 0;
        list-style: none;
        text-align: left;
        color: #525f7f;
        border: 0 solid rgba(0, 0, 0, .15);
        border-radius: .4375rem;
        background-color: #fff;
        background-clip: padding-box;
        box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
    }

    .dropdown-menu.show {
        display: block;
        opacity: 1;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    .dropdown-menu[x-placement^='top'],
    .dropdown-menu[x-placement^='right'],
    .dropdown-menu[x-placement^='bottom'],
    .dropdown-menu[x-placement^='left'] {
        right: auto;
        bottom: auto;
    }

    .dropdown-divider {
        overflow: hidden;
        height: 0;
        margin: .5rem 0;
        border-top: 1px solid #e9ecef;
    }

    .dropdown-item {
        font-weight: 400;
        display: block;
        clear: both;
        width: 100%;
        padding: .25rem 1.5rem;
        text-align: inherit;
        white-space: nowrap;
        color: #212529;
        border: 0;
        background-color: transparent;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        text-decoration: none;
        color: #16181b;
        background-color: #f6f9fc;
    }

    .dropdown-item:active {
        text-decoration: none;
        color: #fff;
        background-color: #5e72e4;
    }

    .dropdown-item:disabled {
        color: #8898aa;
        background-color: transparent;
    }

    .dropdown-header {
        font-size: .875rem;
        display: block;
        margin-bottom: 0;
        padding: .5rem 1.5rem;
        white-space: nowrap;
        color: #8898aa;
    }

    .input-group {
        position: relative;
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        align-items: stretch;
    }

    .input-group>.form-control {
        position: relative;
        width: 1%;
        margin-bottom: 0;
        flex: 1 1 auto;
    }

    .input-group>.form-control+.form-control {
        margin-left: -1px;
    }

    .input-group>.form-control:focus {
        z-index: 3;
    }

    .input-group>.form-control:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group>.form-control:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-prepend {
        display: flex;
    }

    .input-group-prepend .btn {
        position: relative;
        z-index: 2;
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .input-group-text+.btn {
        margin-left: -1px;
    }

    .input-group-prepend {
        margin-right: -1px;
    }

    .input-group-text {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        display: flex;
        margin-bottom: 0;
        padding: .625rem .75rem;
        text-align: center;
        white-space: nowrap;
        color: #adb5bd;
        border: 1px solid #cad1d7;
        border-radius: .375rem;
        background-color: #fff;
        align-items: center;
    }

    .input-group-text input[type='radio'],
    .input-group-text input[type='checkbox'] {
        margin-top: 0;
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .nav {
        display: flex;
        margin-bottom: 0;
        padding-left: 0;
        list-style: none;
        flex-wrap: wrap;
    }

    .nav-link {
        display: block;
        padding: .25rem .75rem;
    }

    .nav-link:hover,
    .nav-link:focus {
        text-decoration: none;
    }

    .navbar {
        position: relative;
        display: flex;
        padding: 1rem 1rem;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .navbar>.container,
    .navbar>.container-fluid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        margin-bottom: 0;
        padding-left: 0;
        list-style: none;
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    @media (max-width: 767.98px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand-md .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            flex-wrap: nowrap;
        }
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .95);
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, .65);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        border: 1px solid rgba(0, 0, 0, .05);
        border-radius: .375rem;
        background-color: #fff;
        background-clip: border-box;
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card-body {
        padding: 1.5rem;
        flex: 1 1 auto;
    }

    .card-header {
        margin-bottom: 0;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, .05);
        background-color: #fff;
    }

    .card-header:first-child {
        border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .progress {
        font-size: .75rem;
        display: flex;
        overflow: hidden;
        height: 1rem;
        border-radius: .375rem;
        background-color: #e9ecef;
        box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
    }

    .media {
        display: flex;
        align-items: flex-start;
    }

    .media-body {
        flex: 1 1;
    }

    .bg-secondary {
        background-color: #f7fafc !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #d2e3ee !important;
    }

    .bg-default {
        background-color: #172b4d !important;
    }

    a.bg-default:hover,
    a.bg-default:focus,
    button.bg-default:hover,
    button.bg-default:focus {
        background-color: #0b1526 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    a.bg-white:hover,
    a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .d-none {
        display: none !important;
    }

    .d-flex {
        display: flex !important;
    }

    @media (min-width: 768px) {

        .d-md-flex {
            display: flex !important;
        }
    }

    @media (min-width: 992px) {

        .d-lg-inline-block {
            display: inline-block !important;
        }

        .d-lg-block {
            display: block !important;
        }
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .justify-content-between {
        justify-content: space-between !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    @media (min-width: 1200px) {

        .justify-content-xl-between {
            justify-content: space-between !important;
        }
    }

    .float-right {
        float: right !important;
    }

    .shadow,
    .card-profile-image img {
        box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
    }

    .m-0 {
        margin: 0 !important;
    }

    .mt-0 {
        margin-top: 0 !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mr-2 {
        margin-right: .5rem !important;
    }

    .ml-2 {
        margin-left: .5rem !important;
    }

    .mr-3 {
        margin-right: 1rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .mr-4 {
        margin-right: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    .mt--7 {
        margin-top: -6rem !important;
    }

    .pt-0 {
        padding-top: 0 !important;
    }

    .pr-0 {
        padding-right: 0 !important;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .pt-5 {
        padding-top: 3rem !important;
    }

    .pt-8 {
        padding-top: 8rem !important;
    }

    .pb-8 {
        padding-bottom: 8rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    @media (min-width: 768px) {

        .mt-md-5 {
            margin-top: 3rem !important;
        }

        .pt-md-4 {
            padding-top: 1.5rem !important;
        }

        .pb-md-4 {
            padding-bottom: 1.5rem !important;
        }
    }

    @media (min-width: 992px) {

        .pl-lg-4 {
            padding-left: 1.5rem !important;
        }

        .pt-lg-8 {
            padding-top: 8rem !important;
        }

        .ml-lg-auto {
            margin-left: auto !important;
        }
    }

    @media (min-width: 1200px) {

        .mb-xl-0 {
            margin-bottom: 0 !important;
        }
    }

    .text-right {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .font-weight-light {
        font-weight: 300 !important;
    }

    .font-weight-bold {
        font-weight: 600 !important;
    }

    .text-white {
        color: #fff !important;
    }

    .text-white {
        color: #fff !important;
    }

    a.text-white:hover,
    a.text-white:focus {
        color: #e6e6e6 !important;
    }

    .text-muted {
        color: #8898aa !important;
    }

    @media print {

        *,
        *::before,
        *::after {
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        img {
            page-break-inside: avoid;
        }

        p,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h3 {
            page-break-after: avoid;
        }

        @page {
            size: a3;
        }

        body {
            min-width: 992px !important;
        }

        .container {
            min-width: 992px !important;
        }

        .navbar {
            display: none;
        }
    }

    figcaption,
    main {
        display: block;
    }

    main {
        overflow: hidden;
    }

    .bg-white {
        background-color: #fff !important;
    }

    a.bg-white:hover,
    a.bg-white:focus,
    button.bg-white:hover,
    button.bg-white:focus {
        background-color: #e6e6e6 !important;
    }

    .bg-gradient-default {
        background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
    }

    .bg-gradient-default {
        background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
    }

    @keyframes floating-lg {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating-sm {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(5px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .opacity-8 {
        opacity: .8 !important;
    }

    .opacity-8 {
        opacity: .9 !important;
    }

    .center {
        left: 50%;
        transform: translateX(-50%);
    }

    [class*='shadow'] {
        transition: all .15s ease;
    }

    .font-weight-300 {
        font-weight: 300 !important;
    }

    .text-sm {
        font-size: .875rem !important;
    }

    .text-white {
        color: #fff !important;
    }

    a.text-white:hover,
    a.text-white:focus {
        color: #e6e6e6 !important;
    }

    .avatar {
        font-size: 1rem;
        display: inline-flex;
        width: 48px;
        height: 48px;
        color: #fff;
        border-radius: 50%;
        background-color: #adb5bd;
        align-items: center;
        justify-content: center;
    }

    .avatar img {
        width: 100%;
        border-radius: 50%;
    }

    .avatar-sm {
        font-size: .875rem;
        width: 36px;
        height: 36px;
    }

    .btn {
        font-size: .875rem;
        position: relative;
        transition: all .15s ease;
        letter-spacing: .025em;
        text-transform: none;
        will-change: transform;
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:not(:last-child) {
        margin-right: .5rem;
    }

    .btn i:not(:first-child) {
        margin-left: .5rem;
    }

    .btn i:not(:last-child) {
        margin-right: .5rem;
    }

    .input-group .btn {
        margin-right: 0;
        transform: translateY(0);
    }

    .btn-sm {
        font-size: .75rem;
    }

    [class*='btn-outline-'] {
        border-width: 1px;
    }

    .card-profile-image {
        position: relative;
    }

    .card-profile-image img {
        position: absolute;
        left: 50%;
        max-width: 180px;
        transition: all .15s ease;
        transform: translate(-50%, -30%);
        border-radius: .375rem;
    }

    .card-profile-image img:hover {
        transform: translate(-50%, -33%);
    }

    .card-profile-stats {
        padding: 1rem 0;
    }

    .card-profile-stats>div {
        margin-right: 1rem;
        padding: .875rem;
        text-align: center;
    }

    .card-profile-stats>div:last-child {
        margin-right: 0;
    }

    .card-profile-stats>div .heading {
        font-size: 1.1rem;
        font-weight: bold;
        display: block;
    }

    .card-profile-stats>div .description {
        font-size: .875rem;
        color: #adb5bd;
    }

    .main-content {
        position: relative;
    }

    .main-content .navbar-top {
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        padding-right: 0 !important;
        padding-left: 0 !important;
        background-color: transparent;
    }

    @media (min-width: 768px) {
        .main-content .container-fluid {
            padding-right: 39px !important;
            padding-left: 39px !important;
        }
    }

    .dropdown {
        display: inline-block;
    }

    .dropdown-menu {
        min-width: 12rem;
    }

    .dropdown-menu .dropdown-item {
        font-size: .875rem;
        padding: .5rem 1rem;
    }

    .dropdown-menu .dropdown-item>i {
        font-size: 1rem;
        margin-right: 1rem;
        vertical-align: -17%;
    }

    .dropdown-header {
        font-size: .625rem;
        font-weight: 700;
        padding-right: 1rem;
        padding-left: 1rem;
        text-transform: uppercase;
        color: #f6f9fc;
    }

    .dropdown-menu a.media>div:first-child {
        line-height: 1;
    }

    .dropdown-menu a.media p {
        color: #8898aa;
    }

    .dropdown-menu a.media:hover .heading,
    .dropdown-menu a.media:hover p {
        color: #172b4d !important;
    }

    .footer {
        padding: 2.5rem 0;
        background: #f7fafc;
    }

    .footer .nav .nav-item .nav-link {
        color: #8898aa !important;
    }

    .footer .nav .nav-item .nav-link:hover {
        color: #525f7f !important;
    }

    .footer .copyright {
        font-size: .875rem;
    }

    .form-control-label {
        font-size: .875rem;
        font-weight: 600;
        color: #525f7f;
    }

    .form-control {
        font-size: .875rem;
    }

    .form-control:focus:-ms-input-placeholder {
        color: #adb5bd;
    }

    .form-control:focus::-ms-input-placeholder {
        color: #adb5bd;
    }

    .form-control:focus::placeholder {
        color: #adb5bd;
    }

    textarea[resize='none'] {
        resize: none !important;
    }

    textarea[resize='both'] {
        resize: both !important;
    }

    textarea[resize='vertical'] {
        resize: vertical !important;
    }

    textarea[resize='horizontal'] {
        resize: horizontal !important;
    }

    .form-control-alternative {
        transition: box-shadow .15s ease;
        border: 0;
        box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
    }

    .form-control-alternative:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .input-group {
        transition: all .15s ease;
        border-radius: .375rem;
        box-shadow: none;
    }

    .input-group .form-control {
        box-shadow: none;
    }

    .input-group .form-control:not(:first-child) {
        padding-left: 0;
        border-left: 0;
    }

    .input-group .form-control:not(:last-child) {
        padding-right: 0;
        border-right: 0;
    }

    .input-group .form-control:focus {
        box-shadow: none;
    }

    .input-group-text {
        transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
    }

    .input-group-alternative {
        transition: box-shadow .15s ease;
        border: 0;
        box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
    }

    .input-group-alternative .form-control,
    .input-group-alternative .input-group-text {
        border: 0;
        box-shadow: none;
    }

    .focused .input-group-alternative {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
    }

    .focused .input-group {
        box-shadow: none;
    }

    .focused .input-group-text {
        color: #8898aa;
        border-color: rgba(50, 151, 211, .25);
        background-color: #fff;
    }

    .focused .form-control {
        border-color: rgba(50, 151, 211, .25);
    }

    .header {
        position: relative;
    }

    .input-group {
        transition: all .15s ease;
        border-radius: .375rem;
        box-shadow: none;
    }

    .input-group .form-control {
        box-shadow: none;
    }

    .input-group .form-control:not(:first-child) {
        padding-left: 0;
        border-left: 0;
    }

    .input-group .form-control:not(:last-child) {
        padding-right: 0;
        border-right: 0;
    }

    .input-group .form-control:focus {
        box-shadow: none;
    }

    .input-group-text {
        transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
    }

    .input-group-alternative {
        transition: box-shadow .15s ease;
        border: 0;
        box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
    }

    .input-group-alternative .form-control,
    .input-group-alternative .input-group-text {
        border: 0;
        box-shadow: none;
    }

    .focused .input-group-alternative {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
    }

    .focused .input-group {
        box-shadow: none;
    }

    .focused .input-group-text {
        color: #8898aa;
        border-color: rgba(50, 151, 211, .25);
        background-color: #fff;
    }

    .focused .form-control {
        border-color: rgba(50, 151, 211, .25);
    }

    .mask {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .15s ease;
    }

    #navbar .navbar {
        margin-bottom: 20px;
    }
</style>
@stop

@section('content')
<div class="container">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        @foreach($users as $user)
        <form action="{{ route('profile.users.update' ,$user->id) }}" method="post" id="apply-inquiry" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger" style="text-align: left;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    @if($user->provider != '')
                                    <div class="imgs">
                                        <img src="{{ Auth::user()->avatar }}" class="rounded-circle">
                                    </div>
                                    @elseif($user->avatar != '')
                                    <div class="imgs" style="width: 500px; height: 70px;">
                                        <img src="{{ asset('/img/user/'.$user->avatar) }}" class="img-thumbnail">
                                    </div>
                                    @else
                                    <div class="imgs">
                                        <img class="rounded-circle" src="{{ asset('/img/download.png') }}" alt="">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h2>
                                    {{$user->name}}<span class="font-weight-light"></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Chỉnh Sửa</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary">Lưu lại</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                <input type="hidden" name="hidden_image" value="{{$user->avatar}}">
                            </div>
                            <h6 class="heading-small text-muted mb-4">Thông tin người dùng</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username" style="color:black">Họ và Tên</label>
                                            <input type="text" name="name" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email" style="color:black">Email</label>
                                            <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="{{$user->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Thông tin liên hệ</h6>
                            <div class="pl-lg-4" style="margin-bottom: 25px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address" style="color:black">Địa chỉ</label>
                                            <input id="input-address" name="address" class="form-control form-control-alternative" placeholder="Địa chỉ nhà" value="{{$user->address}}" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-phone" style="color:black">Số
                                                điện thoại</label>
                                            <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative" placeholder="Số điện thoại" value="{{$user->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection