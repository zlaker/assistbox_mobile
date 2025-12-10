@props(['landing' => false])

<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}">
            @if($landing)
            <!-- Dark logo - always visible on mobile, controlled by CSS on desktop -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 md:h-12 l-dark" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                <defs>
                    <linearGradient gradientUnits="userSpaceOnUse" id="LogoGradient1" x1="1055.79" x2="991.721" y1="1754.26" y2="289.589">
                        <stop offset="0" stop-color="rgb(68,89,113)" stop-opacity="1"></stop>
                        <stop offset="1" stop-color="rgb(96,148,178)" stop-opacity="1"></stop>
                    </linearGradient>
                </defs>
                <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="url(#LogoGradient1)"></path>
                <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgb(81,114,144)"></path>
                <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgb(81,114,144)"></path>
            </svg>
            <!-- White logo - hidden on mobile, controlled by CSS on desktop -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 md:h-12 l-light hidden md:inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="white"></path>
                <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgba(255,255,255,0.7)"></path>
                <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgba(255,255,255,0.7)"></path>
            </svg>
            @else
            <!-- Single logo for inner pages (gradient) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 md:h-12 l-dark" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                <defs>
                    <linearGradient gradientUnits="userSpaceOnUse" id="LogoGradientInner" x1="1055.79" x2="991.721" y1="1754.26" y2="289.589">
                        <stop offset="0" stop-color="rgb(68,89,113)" stop-opacity="1"></stop>
                        <stop offset="1" stop-color="rgb(96,148,178)" stop-opacity="1"></stop>
                    </linearGradient>
                </defs>
                <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="url(#LogoGradientInner)"></path>
                <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgb(81,114,144)"></path>
                <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgb(81,114,144)"></path>
            </svg>
            @endif
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Language & Download buttons Start-->
        <ul class="buy-button list-none mb-0 mt-5 flex items-center">
            <li class="inline ps-1 mb-0">
                <button id="langSwitcher" class="relative group" title="Switch language">
                    @if($landing)
                    <!-- Shown when scrolled (white bg) - colored button -->
                    <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide border-2 border-primary/50 align-middle duration-500 text-base text-center rounded-full bg-primary/10 hover:bg-primary/20 hover:border-primary text-primary font-bold text-xs"><span id="currentLang">EN</span></span></div>
                    <!-- Shown when NOT scrolled (dark bg) - white button -->
                    <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-white/20 hover:bg-white/30 border border-white/30 hover:border-white/50 text-white font-bold text-xs"><span id="currentLangLight">EN</span></span></div>
                    @else
                    <!-- Single style for inner pages -->
                    <span class="size-9 inline-flex items-center justify-center tracking-wide border-2 border-primary/50 align-middle duration-500 text-base text-center rounded-full bg-primary/10 hover:bg-primary/20 hover:border-primary text-primary font-bold text-xs"><span id="currentLang">EN</span></span>
                    @endif
                </button>
            </li>
            <li class="inline ps-1 mb-0">
                <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank">
                    @if($landing)
                    <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white"><i data-feather="download" class="size-4"></i></span></div>
                    <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700"><i data-feather="download" class="size-4"></i></span></div>
                    @else
                    <span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white"><i data-feather="download" class="size-4"></i></span>
                    @endif
                </a>
            </li>
        </ul>
        <!--Language & Download buttons End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu {{ $landing ? 'nav-light' : '' }}">
                <li><a href="{{ route('home') }}" class="sub-menu-item" data-i18n="nav.home">Home</a></li>
                <li><a href="{{ route('home') }}#features" class="sub-menu-item" data-i18n="nav.features">Features</a></li>
                <li><a href="{{ route('home') }}#about" class="sub-menu-item" data-i18n="nav.statistics">Statistics</a></li>
                <li><a href="{{ route('home') }}#testimonials" class="sub-menu-item" data-i18n="nav.whyVoxi">Why Voxi</a></li>
                <li><a href="{{ route('home') }}#download" class="sub-menu-item" data-i18n="nav.download">Download</a></li>
                <li><a href="{{ route('home') }}#news" class="sub-menu-item" data-i18n="nav.news">News</a></li>
                <li><a href="{{ route('ios.support') }}" class="sub-menu-item" data-i18n="nav.support">Support</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
