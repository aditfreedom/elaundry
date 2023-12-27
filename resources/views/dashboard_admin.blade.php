<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{url('admin/assets')}}"
  data-template="{{url('admin/html/vertical-menu-template')}}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Area - E-Laundry</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('favicon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/fonts/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/fonts/fontawesome.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('admin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/swiper/swiper.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/pages/cards-statistics.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/pages/cards-analytics.css')}}" />
    <!-- Helpers -->
    <script src="{{url('admin/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{url('admin/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{url('admin/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{url('/user')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span style="color: var(--bs-primary)">
                 <img src="{{url('favicon.png')}}" class="img-fluid" width="20px">
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Admin Area</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.6" />
                <path
                  d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.38" />
              </svg>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active">
                <a href="app-email.html" class="menu-link">
                  <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                  <div data-i18n="Beranda">Beranda</div>
                </a>
              </li>


            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-collapsed-menu.html" class="menu-link">
                    <div data-i18n="Collapsed menu">Collapsed menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar.html" class="menu-link">
                    <div data-i18n="Content navbar">Content navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                    <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                    <div data-i18n="Horizontal">Horizontal</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Apps & Pages -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Apps &amp; Pages</span>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                <div data-i18n="Email">Email</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                <div data-i18n="Chat">Chat</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                <div data-i18n="Calendar">Calendar</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                <div data-i18n="Kanban">Kanban</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                <div data-i18n="Invoice">Invoice</div>
                <div class="badge bg-danger rounded-pill ms-auto">4</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-invoice-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-preview.html" class="menu-link">
                    <div data-i18n="Preview">Preview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-edit.html" class="menu-link">
                    <div data-i18n="Edit">Edit</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-add.html" class="menu-link">
                    <div data-i18n="Add">Add</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                <div data-i18n="Users">Users</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-user-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="View">View</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-user-view-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-access-roles.html" class="menu-link">
                    <div data-i18n="Roles">Roles</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-access-permission.html" class="menu-link">
                    <div data-i18n="Permission">Permission</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                <div data-i18n="Pages">Pages</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="User Profile">User Profile</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-profile-user.html" class="menu-link">
                        <div data-i18n="Profile">Profile</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-teams.html" class="menu-link">
                        <div data-i18n="Teams">Teams</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-projects.html" class="menu-link">
                        <div data-i18n="Projects">Projects</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Account Settings">Account Settings</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-faq.html" class="menu-link">
                    <div data-i18n="FAQ">FAQ</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Help Center">Help Center</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-help-center-landing.html" class="menu-link">
                        <div data-i18n="Landing">Landing</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-categories.html" class="menu-link">
                        <div data-i18n="Categories">Categories</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-article.html" class="menu-link">
                        <div data-i18n="Article">Article</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-pricing.html" class="menu-link">
                    <div data-i18n="Pricing">Pricing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Misc">Misc</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Error">Error</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                        <div data-i18n="Coming Soon">Coming Soon</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                        <div data-i18n="Not Authorized">Not Authorized</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Server Error">Server Error</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Login">Login</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-login-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Register">Register</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                        <div data-i18n="Multi-steps">Multi-steps</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Verify Email">Verify Email</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Reset Password">Reset Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Forgot Password">Forgot Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Two Steps">Two Steps</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                <div data-i18n="Wizard Examples">Wizard Examples</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="wizard-ex-checkout.html" class="menu-link">
                    <div data-i18n="Checkout">Checkout</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-property-listing.html" class="menu-link">
                    <div data-i18n="Property Listing">Property Listing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-create-deal.html" class="menu-link">
                    <div data-i18n="Create Deal">Create Deal</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="modal-examples.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
                <div data-i18n="Modal Examples">Modal Examples</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Components</span>
            </li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div data-i18n="Cards">Cards</div>
                <div class="badge bg-primary rounded-pill ms-auto">6</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Advance">Advance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-statistics.html" class="menu-link">
                    <div data-i18n="Statistics">Statistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-analytics.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-gamifications.html" class="menu-link">
                    <div data-i18n="Gamifications">Gamifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-actions.html" class="menu-link">
                    <div data-i18n="Actions">Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                <div data-i18n="User interface">User interface</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Accordion</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">List groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">Modals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">Progress</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">Toasts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">Typography</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                <div data-i18n="Extended UI">Extended UI</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-avatar.html" class="menu-link">
                    <div data-i18n="Avatar">Avatar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-blockui.html" class="menu-link">
                    <div data-i18n="BlockUI">BlockUI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-drag-and-drop.html" class="menu-link">
                    <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-media-player.html" class="menu-link">
                    <div data-i18n="Media Player">Media Player</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-star-ratings.html" class="menu-link">
                    <div data-i18n="Star Ratings">Star Ratings</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-sweetalert2.html" class="menu-link">
                    <div data-i18n="SweetAlert2">SweetAlert2</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Timeline">Timeline</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="extended-ui-timeline-basic.html" class="menu-link">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                        <div data-i18n="Fullscreen">Fullscreen</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-tour.html" class="menu-link">
                    <div data-i18n="Tour">Tour</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-treeview.html" class="menu-link">
                    <div data-i18n="Treeview">Treeview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-misc.html" class="menu-link">
                    <div data-i18n="Miscellaneous">Miscellaneous</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Icons -->
            <li class="menu-item">
              <a href="icons-mdi.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div data-i18n="Icons">Icons</div>
              </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Forms &amp; Tables</span>
            </li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-custom-options.html" class="menu-link">
                    <div data-i18n="Custom Options">Custom Options</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-editors.html" class="menu-link">
                    <div data-i18n="Editors">Editors</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-file-upload.html" class="menu-link">
                    <div data-i18n="File Upload">File Upload</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-pickers.html" class="menu-link">
                    <div data-i18n="Pickers">Pickers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-selects.html" class="menu-link">
                    <div data-i18n="Select & Tags">Select &amp; Tags</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-sliders.html" class="menu-link">
                    <div data-i18n="Sliders">Sliders</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-switches.html" class="menu-link">
                    <div data-i18n="Switches">Switches</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-extras.html" class="menu-link">
                    <div data-i18n="Extras">Extras</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-sticky.html" class="menu-link">
                    <div data-i18n="Sticky Actions">Sticky Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                <div data-i18n="Form Wizard">Form Wizard</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-wizard-numbered.html" class="menu-link">
                    <div data-i18n="Numbered">Numbered</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-wizard-icons.html" class="menu-link">
                    <div data-i18n="Icons">Icons</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                <div data-i18n="Form Validation">Form Validation</div>
              </a>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="tables-datatables-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-advanced.html" class="menu-link">
                    <div data-i18n="Advanced">Advanced</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-extensions.html" class="menu-link">
                    <div data-i18n="Extensions">Extensions</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Charts &amp; Maps</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-chart-pie-outline"></i>
                <div data-i18n="Charts">Charts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="charts-apex.html" class="menu-link">
                    <div data-i18n="Apex Charts">Apex Charts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="charts-chartjs.html" class="menu-link">
                    <div data-i18n="ChartJS">ChartJS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                <div data-i18n="Leaflet Maps">Leaflet Maps</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Misc</span>
            </li>
            <li class="menu-item">
              <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <p class="fst-italic">E-Laundry Kabupaten Bireuen</p>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{url('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{url('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">Profil Saya</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="mdi mdi-logout me-2"></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Gamification Card -->
                <div class="col-md-12 col-lg-8">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-md-6 order-2 order-md-1">
                        <div class="card-body">
                          <h4 class="card-title pb-xl-2">Congratulations <strong> John!</strong>🎉</h4>
                          <p class="mb-0">You have done <span class="fw-semibold">68%</span>😎 more sales today.</p>
                          <p>Check your new badge in your profile.</p>
                          <a href="javascript:;" class="btn btn-primary">View Profile</a>
                        </div>
                      </div>
                      <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                        <div class="card-body pb-0 px-0 px-md-4 ps-0">
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Gamification Card -->

                <!-- Statistics Total Order -->
                <div class="col-lg-2 col-sm-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                        <div class="avatar">
                          <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <p class="mb-0 text-success me-1">+22%</p>
                          <i class="mdi mdi-chevron-up text-success"></i>
                        </div>
                      </div>
                      <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                        <h5 class="mb-2">155k</h5>
                        <p class="text-muted mb-lg-2 mb-xl-3">Total Orders</p>
                        <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Statistics Total Order -->

                <!-- Sessions line chart -->
                <div class="col-lg-2 col-sm-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                        <h4 class="mb-0 me-2">$38.5k</h4>
                        <p class="mb-0 text-success">+62%</p>
                      </div>
                      <span class="d-block mb-2 text-muted">Sessions</span>
                    </div>
                    <div class="card-body">
                      <div id="sessions"></div>
                    </div>
                  </div>
                </div>
                <!--/ Sessions line chart -->

                <!-- Total Transactions & Report Chart -->
                <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="row">
                      <div class="col-md-7 col-12 order-2 order-md-0">
                        <div class="card-header">
                          <h5 class="mb-0">Total Transactions</h5>
                        </div>
                        <div class="card-body">
                          <div id="totalTransactionChart"></div>
                        </div>
                      </div>
                      <div class="col-md-5 col-12 border-start">
                        <div class="card-header">
                          <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Report</h5>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="totalTransaction"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalTransaction">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                              </div>
                            </div>
                          </div>
                          <p class="text-muted mb-0">Last month transactions $234.40k</p>
                        </div>
                        <div class="card-body pt-3">
                          <div class="row">
                            <div class="col-6 border-end">
                              <div class="d-flex flex-column align-items-center">
                                <div class="avatar">
                                  <div class="avatar-initial bg-label-success rounded">
                                    <div class="mdi mdi-trending-up mdi-24px"></div>
                                  </div>
                                </div>
                                <p class="text-muted my-2">This Week</p>
                                <h6 class="mb-0 fw-semibold">+82.45%</h6>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="d-flex flex-column align-items-center">
                                <div class="avatar">
                                  <div class="avatar-initial bg-label-primary rounded">
                                    <div class="mdi mdi-trending-down mdi-24px"></div>
                                  </div>
                                </div>
                                <p class="text-muted my-2">This Week</p>
                                <h6 class="mb-0 fw-semibold">-24.86%</h6>
                              </div>
                            </div>
                          </div>
                          <hr class="my-4" />
                          <div class="d-flex justify-content-around">
                            <div>
                              <p class="text-muted mb-1">Performance</p>
                              <h6 class="mb-0 fw-semibold">+94.15%</h6>
                            </div>
                            <button class="btn btn-primary" type="button">view report</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Transactions & Report Chart -->

                <!-- Performance Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header pb-1">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Performance</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="performanceDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-0">
                      <div id="performanceChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Performance Chart -->

                <!-- Project Statistics -->
                <div class="col-md-6 col-xl-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Project Statistics</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="projectStatus"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3 justify-content-between pb-2">
                          <h6 class="mb-0 small">NAME</h6>
                          <h6 class="mb-0 small">BUDGET</h6>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="{{url('admin/assets/img/icons/misc/3d-illustration.png')}}" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">3D Illustration</h6>
                              <small class="text-muted">Blender Illustration</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$6,500</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="{{url('admin/assets/img/icons/misc/finance-app-design.png')}}" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Finance App Design</h6>
                              <small class="text-muted">Figma UI Kit</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$4,290</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="{{url('admin/assets/img/icons/misc/4-square.png')}}" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">4 Square</h6>
                              <small class="text-muted">Android Application</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$44,500</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="{{url('admin/assets/img/icons/misc/delta-web-app.png')}}" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Delta Web App</h6>
                              <small class="text-muted">React Dashboard</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$12,690</div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="{{url('admin/assets/img/icons/misc/ecommerce-website.png')}}" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">eCommerce Website</h6>
                              <small class="text-muted">Vue + Laravel</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$10,850</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Project Statistics -->

                <!-- Multiple widgets -->
                <div class="col-md-6 col-xl-4">
                  <div class="row g-4">
                    <!-- Total Revenue chart -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-header pb-0">
                          <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                            <h4 class="mb-0 me-2">$42.5k</h4>
                            <p class="mb-0 text-danger">-22%</p>
                          </div>
                          <span class="d-block mb-2 text-muted">Total Revenue</span>
                        </div>
                        <div class="card-body">
                          <div id="totalRevenue"></div>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Revenue chart -->

                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-success rounded">
                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 text-success me-1">+38%</p>
                              <i class="mdi mdi-chevron-up text-success"></i>
                            </div>
                          </div>
                          <div class="card-info mt-4 pt-3">
                            <h5 class="mb-2">$13.4k</h5>
                            <p class="text-muted">Total Sales</p>
                            <div class="badge bg-label-secondary rounded-pill mt-1">Last Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-info rounded">
                                <i class="mdi mdi-link mdi-24px"></i>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 text-success me-1">+62%</p>
                              <i class="mdi mdi-chevron-up text-success"></i>
                            </div>
                          </div>
                          <div class="card-info mt-4 pt-4">
                            <h5 class="mb-2">142.8k</h5>
                            <p class="text-muted">Total Impression</p>
                            <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- overview Radial chart -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card">
                        <div class="card-header pb-0">
                          <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                            <h4 class="mb-0 me-2">$67.1k</h4>
                            <p class="mb-0 text-success">+49%</p>
                          </div>
                          <span class="d-block mb-2 text-muted">Overview</span>
                        </div>
                        <div class="card-body">
                          <div id="overviewChart" class="d-flex align-items-center"></div>
                        </div>
                      </div>
                    </div>
                    <!--/ overview Radial chart -->
                  </div>
                </div>
                <!--/ Multiple widgets -->

                <!-- Sales Country Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Sales Country</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="salesCountryDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                      <p class="mb-0 text-muted">Total $42,580 Sales</p>
                    </div>
                    <div class="card-body pb-1 px-0">
                      <div id="salesCountryChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Sales Country Chart -->

                <!-- Top Referral Source  -->
                <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0">
                        <h5 class="mb-0">Top Referral Sources</h5>
                        <small class="text-muted">82% Activity Growth</small>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="earningReportsTabsId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-3">
                      <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                        <li class="nav-item">
                          <div
                            class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-orders-id"
                            aria-controls="navs-orders-id"
                            aria-selected="true">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-google-plus">
                              <i class="mdi mdi-google mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-sales-id"
                            aria-controls="navs-sales-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-facebook">
                              <i class="mdi mdi-facebook mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-profit-id"
                            aria-controls="navs-profit-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-instagram">
                              <i class="mdi mdi-instagram mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-income-id"
                            aria-controls="navs-income-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-twitter">
                              <i class="mdi mdi-twitter mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex align-items-center justify-content-center disabled"
                            role="tab"
                            data-bs-toggle="tab"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded bg-label-secondary">
                              <i class="mdi mdi-plus mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                      </ul>
                      <div class="tab-content p-0 ms-0 ms-sm-2">
                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead>
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">Parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Email Marketing Campaign</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="pe-0 text-success">+24%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$42,857</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Google Workspace</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-danger pe-0">-12%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$850</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Affiliation Program</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+24%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$5,576</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Google Adsense</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="text-success pe-0">0%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$0</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead>
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Create Audiences in Ads Manager</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="pe-0 text-danger">-8%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$322</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Facebook page advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+19%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$5,634</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Messenger advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                  <td class="text-danger pe-0">-23%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$751</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Video campaign</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+21%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$3,585</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead>
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Create shopping advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="pe-0 text-danger">-15%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$599</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">IGTV advertising</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+37%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$1,467</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Collection advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="text-danger pe-0">0%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$0</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Stories advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+29%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$4,546</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead>
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">Parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Interests advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                  <td class="pe-0 text-success">+2%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$404</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Community advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+25%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$399</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Device advertising</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+21%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$177</td>
                                </tr>
                                <tr>
                                  <td class="text-heading fw-semibold ps-0">Campaigning</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-danger pe-0">-5%</td>
                                  <td class="pe-0 text-end fw-semibold h6">$1,139</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Top Referral Source  -->

                <!-- Weekly Sales Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Weekly Sales</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="weeklySalesDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <p class="text-muted mb-0">Total 85.4k Sales</p>
                    </div>
                    <div class="card-body">
                      <div class="row mb-2">
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-muted mb-1">Net Income</small>
                            <h6 class="mb-0 fw-semibold">$438.5K</h6>
                          </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-warning rounded">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-muted mb-1">Expense</small>
                            <h6 class="mb-0 fw-semibold">$22.4K</h6>
                          </div>
                        </div>
                      </div>
                      <div id="weeklySalesChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Weekly Sales Chart-->

                <!-- visits By Day Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header pb-1">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Visits by Day</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="visitsByDayDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsByDayDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <p class="mb-0 text-muted">Total 248.5k Visits</p>
                    </div>
                    <div class="card-body">
                      <div id="visitsByDayChart"></div>
                      <div class="d-flex justify-content-between mt-3">
                        <div>
                          <h6 class="mb-1 fw-semibold">Most Visited Day</h6>
                          <p class="mb-0 text-muted">Total 62.4k Visits on Thursday</p>
                        </div>
                        <div class="avatar">
                          <div class="avatar-initial bg-label-warning rounded">
                            <i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ visits By Day Chart-->

                <!-- Activity Timeline -->
                <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Activity Timeline</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="timelineDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-4 pb-1">
                      <ul class="timeline card-timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2 fw-semibold">Create youtube video for next product 😎</h6>
                              <small class="text-muted">Tomorrow</small>
                            </div>
                            <p class="text-muted mb-2">Product introduction and details video</p>
                            <div class="d-flex">
                              <a href="https://www.youtube.com/@pixinvent1515" target="_blank" class="text-truncate">
                                <span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                                  <i class="mdi mdi-play text-white"></i>
                                </span>
                                <span class="fw-semibold text-muted">https://www.youtube.com/@pixinvent1515</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2 fw-semibold">Received payment from usa client 😍</h6>
                              <small class="text-muted">January, 18</small>
                            </div>
                            <p class="text-muted mb-2">Received payment $1,490 for banking ios app</p>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent border-0">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event pb-1">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2 fw-semibold">Meeting with joseph morgan for next project</h6>
                              <small class="text-muted">April, 23</small>
                            </div>
                            <p class="text-muted mb-2">Meeting Video call on zoom at 9pm</p>
                            <div class="d-flex">
                              <a href="javascript:void(0)" class="me-3">
                                <img
                                  src="{{url('admin/assets/img/icons/misc/pdf.png')}}"
                                  alt="PDF image"
                                  width="20"
                                  class="me-2" />
                                <span class="fw-semibold text-muted">presentation.pdf</span>
                              </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Activity Timeline -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger">❤️</span> by
                    <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium">Pixinvent</a>
                  </div>
                  <div>
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{url('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('admin/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{url('admin/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{url('admin/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{url('admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/swiper/swiper.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('admin/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{url('admin/assets/js/dashboards-analytics.js')}}"></script>
  </body>
</html>
