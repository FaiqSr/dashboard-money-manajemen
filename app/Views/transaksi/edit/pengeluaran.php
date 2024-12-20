<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengeluaran - Dashboard</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <link rel="icon" href="<?php base_url() ?>/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100">



    <main class=" min-h-svh">
        <aside class="fixed lg:flex -translate-x-[500px] lg:translate-x-0 justify-center min-h-svh border-r border-gray-200 bg-slate-50 z-20 w-72 transition-all" id="sidebar">
            <section class="flex flex-col h-svh w-full p-5">
                <div class="flex items-center mb-3">
                    <img src="<?= base_url(); ?>/assets/logo.png" alt="" class="w-20">
                    <div>
                        <h1>MonifyIPB</h1>
                        <p>Kel 6 C-P2</p>
                    </div>
                </div>
                <ul class="font-semibold font-sourGummy text-lg w-full">
                    <li class="hover:bg-gray-100 text-gray-700 p-2 hover:text-gray-900 rounded-lg mb-2">
                        <div class="flex items-center" style="gap: 0.5rem;">
                            <svg fill="#000000" width="25px" height="25px" viewBox="0 -7 42 42" xmlns="http://www.w3.org/2000/svg">
                                <path id="_48.Dashboard" data-name="48.Dashboard" d="M44.9,32.971c0,.011.006.019.006.029s0,.01,0,.016a.076.076,0,0,1,0,.016,1,1,0,0,1-1,1C43.921,34.031,35,34,35,34a1,1,0,0,1,0-2h7.946c.019-.334.054-.662.054-1A19,19,0,0,0,5,31c0,.338.035.666.053,1H13a1,1,0,0,1,0,2l-8.906.031a1,1,0,0,1-1-1,.076.076,0,0,1,0-.016c0-.006,0-.011,0-.016s.006-.019.006-.028C3.039,32.321,3,31.665,3,31a21,21,0,0,1,42,0C45,31.665,44.961,32.321,44.9,32.971ZM17.523,21.128a1.052,1.052,0,0,1,1.189.133l-.05-.083c8.774,6.42,10.577,9.373,10.61,9.428a4.8,4.8,0,0,1-1.9,6.731,5.339,5.339,0,0,1-7.085-1.8c-.035-.053-1.824-3.014-3.291-13.442l.051.082A.948.948,0,0,1,17.523,21.128Zm4.563,13.421a3.161,3.161,0,0,0,2.7,1.478,3.231,3.231,0,0,0,1.552-.4,2.959,2.959,0,0,0,1.45-1.794,2.8,2.8,0,0,0-.3-2.232c-.017-.025-1.572-2.386-8.062-7.348C20.7,32.071,22.075,34.529,22.086,34.549Z" transform="translate(-3 -10)" fill-rule="evenodd" />
                            </svg>
                            <a href="/" class="">Dashboard</a>
                        </div>
                    </li>
                    <li class="hover:bg-gray-100 text-gray-700 p-2 hover:text-gray-900 rounded-lg mb-2 flex" style="gap: 0.5rem;">
                        <svg fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203     C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578     c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626     h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856     c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626     C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32     c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082     c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z      M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826     c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485     c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z" />
                                        <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258     c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258     C323.259,126.96,315.532,119.235,306.001,119.235z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <a href="/about" class="">About Us</a>
                    </li>
                    <li class=" text-gray-700 mb-2 hover:text-gray-900 ">
                        <button class="flex justify-between w-full items-center rounded-lg p-2 hover:bg-gray-100" aria-controls="menu" aria-expanded="false" onclick="toggleMenu(1)">
                            <div class="flex " style="gap: 0.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1" viewBox="0 0 487.5 487.5" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M437,12.3C437,5.5,431.5,0,424.7,0H126.3C84.4,0,50.4,34.1,50.4,75.9v335.7c0,41.9,34.1,75.9,75.9,75.9h298.5    c6.8,0,12.3-5.5,12.3-12.3V139.6c0-6.8-5.5-12.3-12.3-12.3H126.3c-28.3,0-51.4-23.1-51.4-51.4S98,24.5,126.3,24.5h298.5    C431.5,24.5,437,19,437,12.3z M126.3,151.8h286.2V463H126.3c-28.3,0-51.4-23.1-51.4-51.4V131.7    C88.4,144.2,106.5,151.8,126.3,151.8z" />
                                            <path d="M130.5,64.8c-6.8,0-12.3,5.5-12.3,12.3s5.5,12.3,12.3,12.3h280.1c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H130.5z" />
                                            <path d="M178,397.7c6.3,2.4,13.4-0.7,15.8-7.1l17.9-46.8h62.7c0.5,0,0.9-0.1,1.3-0.1l17.9,46.9c1.9,4.9,6.5,7.9,11.4,7.9    c1.5,0,2.9-0.3,4.4-0.8c6.3-2.4,9.5-9.5,7.1-15.8l-54-141.2c-3-7.9-10.4-13-18.8-13c-8.4,0-15.8,5.1-18.8,13l-54,141.2    C168.5,388.2,171.7,395.2,178,397.7z M243.7,260l22.7,59.3h-45.3L243.7,260z" />
                                        </g>
                                    </g>
                                </svg>
                                <h5>Transaksi</h5>
                            </div>
                            <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="sideBarMenu1">
                            <li>
                                <a href="/transaksi/pemasukan" class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                                    <h5>Pemasukan</h5>
                                </a>
                            </li>
                            <li>
                                <a href="/transaksi/pengeluaran" class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                                    <h5>Pengeluaran</h5>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" text-gray-700 mb-2 hover:text-gray-900">
                        <button class="flex justify-between w-full items-center p-2 rounded-lg hover:bg-gray-100" aria-controls="menu" aria-expanded="false" onclick="toggleMenu(3)">
                            <div class="flex " style="gap: 0.5rem;">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 15.25C10.307 15.2353 10.1276 15.1455 9.99998 15L6.99998 12C6.93314 11.8601 6.91133 11.7029 6.93756 11.55C6.96379 11.3971 7.03676 11.2562 7.14643 11.1465C7.2561 11.0368 7.39707 10.9638 7.54993 10.9376C7.70279 10.9114 7.86003 10.9332 7.99998 11L10.47 13.47L19 5.00004C19.1399 4.9332 19.2972 4.91139 19.45 4.93762C19.6029 4.96385 19.7439 5.03682 19.8535 5.14649C19.9632 5.25616 20.0362 5.39713 20.0624 5.54999C20.0886 5.70286 20.0668 5.86009 20 6.00004L11 15C10.8724 15.1455 10.6929 15.2353 10.5 15.25Z" fill="#000000" />
                                    <path d="M12 21C10.3915 20.9974 8.813 20.5638 7.42891 19.7443C6.04481 18.9247 4.90566 17.7492 4.12999 16.34C3.54037 15.29 3.17596 14.1287 3.05999 12.93C2.87697 11.1721 3.2156 9.39921 4.03363 7.83249C4.85167 6.26578 6.1129 4.9746 7.65999 4.12003C8.71001 3.53041 9.87134 3.166 11.07 3.05003C12.2641 2.92157 13.4719 3.03725 14.62 3.39003C14.7224 3.4105 14.8195 3.45215 14.9049 3.51232C14.9903 3.57248 15.0622 3.64983 15.116 3.73941C15.1698 3.82898 15.2043 3.92881 15.2173 4.03249C15.2302 4.13616 15.2214 4.2414 15.1913 4.34146C15.1612 4.44152 15.1105 4.53419 15.0425 4.61352C14.9745 4.69286 14.8907 4.75712 14.7965 4.80217C14.7022 4.84723 14.5995 4.87209 14.4951 4.87516C14.3907 4.87824 14.2867 4.85946 14.19 4.82003C13.2186 4.52795 12.1987 4.43275 11.19 4.54003C10.193 4.64212 9.22694 4.94485 8.34999 5.43003C7.50512 5.89613 6.75813 6.52088 6.14999 7.27003C5.52385 8.03319 5.05628 8.91361 4.77467 9.85974C4.49307 10.8059 4.40308 11.7987 4.50999 12.78C4.61208 13.777 4.91482 14.7431 5.39999 15.62C5.86609 16.4649 6.49084 17.2119 7.23999 17.82C8.00315 18.4462 8.88357 18.9137 9.8297 19.1953C10.7758 19.4769 11.7686 19.5669 12.75 19.46C13.747 19.3579 14.713 19.0552 15.59 18.57C16.4349 18.1039 17.1818 17.4792 17.79 16.73C18.4161 15.9669 18.8837 15.0864 19.1653 14.1403C19.4469 13.1942 19.5369 12.2014 19.43 11.22C19.4201 11.1169 19.4307 11.0129 19.461 10.9139C19.4914 10.8149 19.5409 10.7228 19.6069 10.643C19.6728 10.5631 19.7538 10.497 19.8453 10.4485C19.9368 10.3999 20.0369 10.3699 20.14 10.36C20.2431 10.3502 20.3471 10.3607 20.4461 10.3911C20.5451 10.4214 20.6372 10.471 20.717 10.5369C20.7969 10.6028 20.863 10.6839 20.9115 10.7753C20.9601 10.8668 20.9901 10.9669 21 11.07C21.1821 12.829 20.842 14.6026 20.0221 16.1695C19.2022 17.7363 17.9389 19.0269 16.39 19.88C15.3288 20.4938 14.1495 20.8755 12.93 21C12.62 21 12.3 21 12 21Z" fill="#000000" />
                                </svg>
                                <h5>Budgeting</h5>
                            </div>
                            <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="sideBarMenu3" hidden>
                            <li>
                                <a href="/budgeting/bulan" class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                                    <h5>Bulanan</h5>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" text-gray-700 mb-2 hover:text-gray-900">
                        <a href="/rekapitulasi" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100" style="gap: 0.5rem;">
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 495.398 495.398" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391     v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158     c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747     c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z" />
                                            <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401     c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79     c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Rekapitulasi Keuangan
                        </a>
                    </li>
                    </li>
                    <!-- <li class=" text-gray-700 mb-2 hover:text-gray-900">
                        <a href="/setting" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100" style="gap: 0.5rem;">
                            <svg height="25px" width="25px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #000000;
                                    }
                                </style>
                                <g>
                                    <path class="st0" d="M502.325,307.303l-39.006-30.805c-6.215-4.908-9.665-12.429-9.668-20.348c0-0.084,0-0.168,0-0.252   c-0.014-7.936,3.44-15.478,9.667-20.396l39.007-30.806c8.933-7.055,12.093-19.185,7.737-29.701l-17.134-41.366   c-4.356-10.516-15.167-16.86-26.472-15.532l-49.366,5.8c-7.881,0.926-15.656-1.966-21.258-7.586   c-0.059-0.06-0.118-0.119-0.177-0.178c-5.597-5.602-8.476-13.36-7.552-21.225l5.799-49.363   c1.328-11.305-5.015-22.116-15.531-26.472L337.004,1.939c-10.516-4.356-22.646-1.196-29.701,7.736l-30.805,39.005   c-4.908,6.215-12.43,9.665-20.349,9.668c-0.084,0-0.168,0-0.252,0c-7.935,0.014-15.477-3.44-20.395-9.667L204.697,9.675   c-7.055-8.933-19.185-12.092-29.702-7.736L133.63,19.072c-10.516,4.356-16.86,15.167-15.532,26.473l5.799,49.366   c0.926,7.881-1.964,15.656-7.585,21.257c-0.059,0.059-0.118,0.118-0.178,0.178c-5.602,5.598-13.36,8.477-21.226,7.552   l-49.363-5.799c-11.305-1.328-22.116,5.015-26.472,15.531L1.939,174.996c-4.356,10.516-1.196,22.646,7.736,29.701l39.006,30.805   c6.215,4.908,9.665,12.429,9.668,20.348c0,0.084,0,0.167,0,0.251c0.014,7.935-3.44,15.477-9.667,20.395L9.675,307.303   c-8.933,7.055-12.092,19.185-7.736,29.701l17.134,41.365c4.356,10.516,15.168,16.86,26.472,15.532l49.366-5.799   c7.882-0.926,15.656,1.965,21.258,7.586c0.059,0.059,0.118,0.119,0.178,0.178c5.597,5.603,8.476,13.36,7.552,21.226l-5.799,49.364   c-1.328,11.305,5.015,22.116,15.532,26.472l41.366,17.134c10.516,4.356,22.646,1.196,29.701-7.736l30.804-39.005   c4.908-6.215,12.43-9.665,20.348-9.669c0.084,0,0.168,0,0.251,0c7.936-0.014,15.478,3.44,20.396,9.667l30.806,39.007   c7.055,8.933,19.185,12.093,29.701,7.736l41.366-17.134c10.516-4.356,16.86-15.168,15.532-26.472l-5.8-49.366   c-0.926-7.881,1.965-15.656,7.586-21.257c0.059-0.059,0.119-0.119,0.178-0.178c5.602-5.597,13.36-8.476,21.225-7.552l49.364,5.799   c11.305,1.328,22.117-5.015,26.472-15.531l17.134-41.365C514.418,326.488,511.258,314.358,502.325,307.303z M281.292,329.698   c-39.68,16.436-85.172-2.407-101.607-42.087c-16.436-39.68,2.407-85.171,42.087-101.608c39.68-16.436,85.172,2.407,101.608,42.088   C339.815,267.771,320.972,313.262,281.292,329.698z" />
                                </g>
                            </svg>
                            Settings
                        </a>
                    </li> -->
                    <li class=" text-gray-700 mb-2 hover:text-gray-900">
                        <a href="/logout" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100" style="gap: 0.5rem;">
                            <svg fill="#000000" height="25px" width="25px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                                <path d="M30.9,13.6c-0.1-0.1-0.1-0.2-0.2-0.3l-4-4c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l2.3,2.3H22v-3V3c0-0.6-0.4-1-1-1H4  c0,0,0,0,0,0C3.9,2,3.7,2,3.6,2.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0C3.2,2.4,3.1,2.5,3.1,2.6  c0,0,0,0,0,0.1C3,2.8,3,2.9,3,3v22c0,0.4,0.2,0.8,0.6,0.9l9,4C12.7,30,12.9,30,13,30c0.2,0,0.4-0.1,0.5-0.2c0.3-0.2,0.5-0.5,0.5-0.8  v-3h7c0.6,0,1-0.4,1-1V15h5.6l-2.3,2.3c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l4-4c0.1-0.1,0.2-0.2,0.2-0.3  C31,14.1,31,13.9,30.9,13.6z M10,21c0,0.6-0.4,1-1,1s-1-0.4-1-1v-4c0-0.6,0.4-1,1-1s1,0.4,1,1V21z M20,10v14h-6V7  c0-0.4-0.2-0.8-0.6-0.9L8.7,4H20V10z" />
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <!-- Main Content -->
        <section class="lg:ml-72 transition-all p-5">
            <header>
                <nav class="px-5 py-2 lg:py-[0.85rem] flex justify-between items-center border-b rounded-lg border-gray-200 bg-gray-50 z-50">
                    <section>
                        <h1 class="text-3xl font-sourGummy">KOMAK TI</h1>
                    </section>
                    <section class="flex items-center">
                        <section class="lg:hidden">
                            <button class="flex items-center hover:bg-gray-100 p-2 rounded-lg" id="menu" onclick="toggleSideBar()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 20 20" fill="none">
                                    <path fill="#000000" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z" />
                                </svg>
                            </button>
                        </section>
                    </section>
                </nav>
            </header>

            <!-- Edit Pengeluaran Form -->
            <section class="pt-5">
                <section>
                    <h1 class="text-3xl font-sourGummy">Edit Pengeluaran</h1>
                </section>
                <section class="bg-white shadow-md rounded-lg p-5 mt-5 w-full mx-auto">
                    <form action="<?= base_url('/transaksi/pengeluaran/edit') ?>" method="post" class="space-y-5">
                        <input type="hidden" value="<?= $pengeluaran['id'] ?>" name="id">
                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-gray-700 font-medium">Deskripsi</label>
                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                rows="4"
                                placeholder="Masukkan Deskripsi"
                                class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none"><?php echo $pengeluaran['desc']; ?></textarea>
                        </div>

                        <!-- Jumlah -->
                        <div>
                            <label for="jumlah" class="block text-gray-700 font-medium">Jumlah</label>
                            <input
                                type="number"
                                id="jumlah"
                                name="jumlah"
                                value="<?= $pengeluaran['jumlah'] ?>"
                                placeholder="Masukkan Jumlah"
                                class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none">
                        </div>

                        <!-- Kategori -->
                        <div>
                            <label for="kategori" class="block text-gray-700 font-medium">Kategori</label>
                            <select
                                id="kategori"
                                name="kategori"
                                class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none"
                                onchange="setMaxValue()">
                                <?php foreach ($category as $kategori) { ?>
                                    <?php if ($kategori->id == $pengeluaran['category_id']) { ?>
                                        <option value="<?= $kategori->id ?>" data-max='<?= $kategori->jumlah - $kategori->sisa + $pengeluaran['jumlah'] ?>'><?= $kategori->nama ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $kategori->id ?>" data-max='<?= $kategori->jumlah - $kategori->sisa ?>'><?= $kategori->nama ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:ring focus:ring-blue-300 transition">
                                Simpan
                            </button>
                        </div>
                    </form>
                </section>
            </section>
        </section>




        <script>
            function toggleSideBar() {
                const sideBar = document.getElementById('sidebar')
                const menu = document.getElementById('menu')

                if (sideBar.classList.contains('translate-x-0')) {
                    sideBar.classList.remove('translate-x-0')
                    sideBar.classList.add('-translate-x-[500px]')

                } else {
                    sideBar.classList.remove('-translate-x-[500px]')
                    sideBar.classList.add('translate-x-0')
                }
            }

            function toggleMenu(id) {
                const menu = document.getElementById(`sideBarMenu${id}`);
                const button = document.querySelector('button[aria-controls="menu"]');

                // Toggle visibility of the menu
                if (menu.hasAttribute("hidden")) {
                    menu.removeAttribute("hidden");
                    button.setAttribute("aria-expanded", "true");
                } else {
                    menu.setAttribute("hidden", "");
                    button.setAttribute("aria-expanded", "false");
                }
            }
        </script>
        <script>
            function setMaxValue() {
                const select = document.getElementById('kategori'); // Dropdown kategori
                const amountInput = document.getElementById('jumlah'); // Input jumlah

                // Ambil atribut data-max dari opsi yang dipilih
                const maxValue = select.options[select.selectedIndex].getAttribute('data-max');

                // Atur atribut max pada input jumlah
                amountInput.max = maxValue;

                // Tampilkan placeholder untuk membantu pengguna
                amountInput.placeholder = `Masukkan jumlah (maksimal ${maxValue})`;

                // Reset nilai input jika melebihi batas maksimal yang baru
                if (parseInt(amountInput.value) > maxValue) {
                    amountInput.value = ''; // Reset nilai jika melebihi maksimal
                }
            }

            // Panggil fungsi saat halaman dimuat pertama kali
            window.onload = setMaxValue;
        </script>
    </main>
</body>

</html>