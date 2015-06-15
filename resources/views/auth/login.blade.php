@extends('layout.clean')

@section('bodyClass', 'login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="form-bg">
                <div class="logo">
                    <svg viewBox="0 0 1512 296" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <g id="Cachet" sketch:type="MSArtboardGroup">
                                <g id="Icon" sketch:type="MSLayerGroup" transform="translate(8.000000, 10.000000)">
                                    <path d="M203.656247,22.5075363 L207.908364,18.25542 C187.59758,6.63914745 164.074118,0 139,0 C62.2324198,0 0,62.2324198 0,139 C0,215.76758 62.2324198,278 139,278 C215.76758,278 278,215.76758 278,139 C278,121.94987 274.930156,105.616742 269.313035,90.5231813 L269.313035,90.5231813 L264.787268,95.0489482 C269.594876,108.809354 272.208333,123.599474 272.208333,139 C272.208333,212.568931 212.568931,272.208333 139,272.208333 C65.431069,272.208333 5.79166667,212.568931 5.79166667,139 C5.79166667,65.431069 65.431069,5.79166667 139,5.79166667 C162.4632,5.79166667 184.509555,11.8578965 203.656247,22.5075363 L203.656247,22.5075363 Z" id="Oval-1" stroke="#FFFFFF" stroke-width="12" sketch:type="MSShapeGroup"></path>
                                    <path d="M105.697915,173.088048 L106.528258,172.257705 L271.176539,7.60942419 L277.5405,1.24546317 L290.268422,13.9733853 L283.904461,20.3373463 L119.25618,184.985627 L118.425837,185.81597 L105.697917,198.543894 L99.3339556,192.179933 L53.3919048,146.237882 L47.0279438,139.873921 L59.7558659,127.145999 L66.1198269,133.50996 L105.697915,173.088048 L105.697915,173.088048 Z" id="Line" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                </g>
                                <path d="M335,147 C335,136.33328 336.874981,125.708386 340.625,115.125 C344.375019,104.541614 349.833298,95.083375 357,86.75 C364.166702,78.416625 372.999948,71.6250262 383.5,66.375 C394.000052,61.1249738 405.9166,58.5 419.25,58.5 C435.083413,58.5 448.583278,62.0832975 459.75,69.25 C470.916722,76.4167025 479.249973,85.7499425 484.75,97.25 L470.75,105.75 C467.916652,99.9166375 464.50002,95.00002 460.5,91 C456.49998,86.99998 452.16669,83.7500125 447.5,81.25 C442.83331,78.7499875 438.000025,76.9583387 433,75.875 C427.999975,74.7916613 423.083358,74.25 418.25,74.25 C407.58328,74.25 398.166708,76.416645 390,80.75 C381.833292,85.083355 374.958361,90.749965 369.375,97.75 C363.791639,104.750035 359.583348,112.624956 356.75,121.375 C353.916652,130.125044 352.5,138.999955 352.5,148 C352.5,157.833382 354.208316,167.249955 357.625,176.25 C361.041684,185.250045 365.708304,193.208299 371.625,200.125 C377.541696,207.041701 384.541626,212.541646 392.625,216.625 C400.708374,220.708354 409.499953,222.75 419,222.75 C424.000025,222.75 429.124974,222.125006 434.375,220.875 C439.625026,219.624994 444.708309,217.625014 449.625,214.875 C454.541691,212.124986 459.083313,208.708354 463.25,204.625 C467.416687,200.541646 470.916652,195.583363 473.75,189.75 L488.25,197.25 C485.416652,203.9167 481.416693,209.791641 476.25,214.875 C471.083307,219.958359 465.333365,224.249982 459,227.75 C452.666635,231.250018 445.958369,233.916657 438.875,235.75 C431.791631,237.583343 424.833368,238.5 418,238.5 C405.833273,238.5 394.666718,235.83336 384.5,230.5 C374.333282,225.16664 365.58337,218.208376 358.25,209.625 C350.91663,201.041624 345.208354,191.291721 341.125,180.375 C337.041646,169.458279 335,158.33339 335,147 L335,147 Z M549,239.5 C542.3333,239.5 536.250027,238.458344 530.75,236.375 C525.249973,234.291656 520.541686,231.416685 516.625,227.75 C512.708314,224.083315 509.666677,219.833358 507.5,215 C505.333323,210.166642 504.25,205.08336 504.25,199.75 C504.25,193.74997 505.58332,188.291691 508.25,183.375 C510.91668,178.458309 514.666642,174.250018 519.5,170.75 C524.333357,167.249982 530.124966,164.541676 536.875,162.625 C543.625034,160.708324 551.083292,159.75 559.25,159.75 C565.750032,159.75 572.416632,160.333327 579.25,161.5 C586.083368,162.666673 592.16664,164.333323 597.5,166.5 L597.5,154.75 C597.5,143.249943 594.208366,134.125034 587.625,127.375 C581.041634,120.624966 572.166722,117.25 561,117.25 C553.999965,117.25 547.041701,118.58332 540.125,121.25 C533.208299,123.91668 526.166702,127.749975 519,132.75 L513,121.5 C521.500043,115.833305 529.74996,111.583348 537.75,108.75 C545.75004,105.916652 554.08329,104.5 562.75,104.5 C578.583413,104.5 591.16662,109.083287 600.5,118.25 C609.83338,127.416713 614.5,140.083253 614.5,156.25 L614.5,215 C614.5,219.66669 616.49998,222 620.5,222 L620.5,237 C619.16666,237.166668 617.916673,237.291666 616.75,237.375 C615.583327,237.458334 614.583337,237.5 613.75,237.5 C610.41665,237.5 607.375014,236.50001 604.625,234.5 C601.874986,232.49999 600.333335,229.50002 600,225.5 L599.5,215.25 C593.833305,222.916705 586.375046,228.874979 577.125,233.125 C567.874954,237.375021 558.500047,239.5 549,239.5 L549,239.5 Z M553.25,226.5 C560.750037,226.5 568.208296,224.875016 575.625,221.625 C583.041704,218.374984 588.916645,213.916695 593.25,208.25 C594.416673,206.749992 595.416663,205.125009 596.25,203.375 C597.083337,201.624991 597.5,200.000008 597.5,198.5 L597.5,177.25 C591.833305,175.083323 585.916698,173.416673 579.75,172.25 C573.583302,171.083327 567.583363,170.5 561.75,170.5 C549.583273,170.5 539.708371,172.958309 532.125,177.875 C524.541629,182.791691 520.75,189.58329 520.75,198.25 C520.75,201.750018 521.41666,205.16665 522.75,208.5 C524.08334,211.83335 526.124986,214.83332 528.875,217.5 C531.625014,220.16668 534.99998,222.333325 539,224 C543.00002,225.666675 547.749973,226.5 553.25,226.5 L553.25,226.5 Z M643,171.5 C643,162.333288 644.583318,153.666708 647.75,145.5 C650.916682,137.333292 655.374971,130.208364 661.125,124.125 C666.875029,118.041636 673.74996,113.250018 681.75,109.75 C689.75004,106.249982 698.583285,104.5 708.25,104.5 C720.583395,104.5 731.333288,107.291639 740.5,112.875 C749.666713,118.458361 756.58331,125.999953 761.25,135.5 L744.75,140.75 C741.083315,134.0833 736.000032,128.875019 729.5,125.125 C722.999968,121.374981 715.75004,119.5 707.75,119.5 C701.0833,119.5 694.875029,120.83332 689.125,123.5 C683.374971,126.16668 678.375021,129.791644 674.125,134.375 C669.874979,138.958356 666.541679,144.416635 664.125,150.75 C661.708321,157.083365 660.5,163.999963 660.5,171.5 C660.5,178.83337 661.749987,185.749967 664.25,192.25 C666.750013,198.750033 670.166645,204.374976 674.5,209.125 C678.833355,213.875024 683.874971,217.624986 689.625,220.375 C695.375029,223.125014 701.499968,224.5 708,224.5 C712.166687,224.5 716.291646,223.916673 720.375,222.75 C724.458354,221.583327 728.249982,219.958344 731.75,217.875 C735.250018,215.791656 738.249987,213.41668 740.75,210.75 C743.250012,208.08332 744.999995,205.250015 746,202.25 L762.5,207.25 C760.666657,211.91669 758.000018,216.208314 754.5,220.125 C750.999982,224.041686 746.875024,227.458319 742.125,230.375 C737.374976,233.291681 732.125029,235.541659 726.375,237.125 C720.624971,238.708341 714.666698,239.5 708.5,239.5 C698.999953,239.5 690.25004,237.708351 682.25,234.125 C674.24996,230.541649 667.333363,225.625031 661.5,219.375 C655.666637,213.124969 651.125016,205.916708 647.875,197.75 C644.624984,189.583292 643,180.83338 643,171.5 L643,171.5 Z M898.5,237 L881.5,237 L881.5,164.25 C881.5,149.416593 878.958359,138.33337 873.875,131 C868.791641,123.66663 861.333382,120 851.5,120 C846.666642,120 841.875024,120.958324 837.125,122.875 C832.374976,124.791676 827.916687,127.41665 823.75,130.75 C819.583313,134.08335 815.958349,137.999977 812.875,142.5 C809.791651,147.000023 807.500008,151.91664 806,157.25 L806,237 L789,237 L789,54.5 L806,54.5 L806,136.25 C811.33336,126.416618 818.583287,118.666695 827.75,113 C836.916712,107.333305 846.749947,104.5 857.25,104.5 C864.750037,104.5 871.124974,105.874986 876.375,108.625 C881.625026,111.375014 885.874984,115.208309 889.125,120.125 C892.375016,125.041691 894.749992,130.958299 896.25,137.875 C897.750008,144.791701 898.5,152.416625 898.5,160.75 L898.5,237 Z M990.75,239.5 C981.249952,239.5 972.50004,237.708351 964.5,234.125 C956.49996,230.541649 949.583363,225.625031 943.75,219.375 C937.916637,213.124969 933.375016,205.916708 930.125,197.75 C926.874984,189.583292 925.25,180.83338 925.25,171.5 C925.25,162.333288 926.874984,153.708374 930.125,145.625 C933.375016,137.541626 937.916637,130.458364 943.75,124.375 C949.583363,118.291636 956.458294,113.458351 964.375,109.875 C972.291706,106.291649 980.999953,104.5 990.5,104.5 C1000.00005,104.5 1008.70829,106.291649 1016.625,109.875 C1024.54171,113.458351 1031.33331,118.333303 1037,124.5 C1042.66669,130.666697 1047.08332,137.74996 1050.25,145.75 C1053.41668,153.75004 1055,162.249955 1055,171.25 C1055,172.58334 1054.95833,173.91666 1054.875,175.25 C1054.79167,176.58334 1054.66667,177.499998 1054.5,178 L943.25,178 C943.750002,185.000035 945.374986,191.458304 948.125,197.375 C950.875014,203.291696 954.374979,208.416645 958.625,212.75 C962.875021,217.083355 967.791639,220.458321 973.375,222.875 C978.958361,225.291679 984.916635,226.5 991.25,226.5 C995.583355,226.5 999.833312,225.916673 1004,224.75 C1008.16669,223.583327 1011.99998,222.00001 1015.5,220 C1019.00002,217.99999 1022.12499,215.541681 1024.875,212.625 C1027.62501,209.708319 1029.74999,206.500018 1031.25,203 L1046,207 C1043.99999,211.833358 1041.16669,216.208314 1037.5,220.125 C1033.83332,224.041686 1029.58336,227.458319 1024.75,230.375 C1019.91664,233.291681 1014.58336,235.541659 1008.75,237.125 C1002.91664,238.708341 996.916698,239.5 990.75,239.5 L990.75,239.5 Z M1038.75,165 C1038.25,157.999965 1036.62501,151.625029 1033.875,145.875 C1031.12499,140.124971 1027.62502,135.166687 1023.375,131 C1019.12498,126.833313 1014.1667,123.583345 1008.5,121.25 C1002.8333,118.916655 996.833365,117.75 990.5,117.75 C984.166635,117.75 978.166695,118.916655 972.5,121.25 C966.833305,123.583345 961.875021,126.833313 957.625,131 C953.374979,135.166687 949.958346,140.166638 947.375,146 C944.791654,151.833362 943.250003,158.166632 942.75,165 L1038.75,165 Z M1142.25,230.75 C1141.25,231.250002 1139.79168,231.916663 1137.875,232.75 C1135.95832,233.583337 1133.75001,234.416663 1131.25,235.25 C1128.74999,236.083337 1125.91668,236.83333 1122.75,237.5 C1119.58332,238.16667 1116.25002,238.5 1112.75,238.5 C1109.08332,238.5 1105.58335,238.000005 1102.25,237 C1098.91665,235.999995 1096.00001,234.458344 1093.5,232.375 C1090.99999,230.291656 1089.00001,227.666683 1087.5,224.5 C1085.99999,221.333318 1085.25,217.666687 1085.25,213.5 L1085.25,120.25 L1067.25,120.25 L1067.25,106.75 L1085.25,106.75 L1085.25,62.75 L1102.25,62.75 L1102.25,106.75 L1132.25,106.75 L1132.25,120.25 L1102.25,120.25 L1102.25,208.75 C1102.58334,213.583358 1104.24998,217.124989 1107.25,219.375 C1110.25002,221.625011 1113.83331,222.75 1118,222.75 C1122.83336,222.75 1127.08331,221.958341 1130.75,220.375 C1134.41669,218.791659 1136.75,217.66667 1137.75,217 L1142.25,230.75 Z M1306.5,59.5 L1306.5,237 L1289,237 L1289,154 L1183.75,154 L1183.75,237 L1166.5,237 L1166.5,59.5 L1183.75,59.5 L1183.75,138.5 L1289,138.5 L1289,59.5 L1306.5,59.5 Z M1471.75,221.25 C1464.91663,226.58336 1457.45837,230.749985 1449.375,233.75 C1441.29163,236.750015 1432.58338,238.25 1423.25,238.25 C1410.9166,238.25 1399.62505,235.666693 1389.375,230.5 C1379.12495,225.333307 1370.33337,218.583375 1363,210.25 C1355.66663,201.916625 1350.00002,192.333388 1346,181.5 C1341.99998,170.666612 1340,159.58339 1340,148.25 C1340,136.416607 1342.12498,125.083388 1346.375,114.25 C1350.62502,103.416612 1356.49996,93.833375 1364,85.5 C1371.50004,77.166625 1380.33328,70.5416912 1390.5,65.625 C1400.66672,60.7083087 1411.66661,58.25 1423.5,58.25 C1435.8334,58.25 1447.12495,60.8749737 1457.375,66.125 C1467.62505,71.3750263 1476.37496,78.2499575 1483.625,86.75 C1490.87504,95.2500425 1496.49998,104.874946 1500.5,115.625 C1504.50002,126.375054 1506.5,137.333278 1506.5,148.5 C1506.5,160.666728 1504.29169,172.249945 1499.875,183.25 C1495.45831,194.250055 1489.33337,203.916625 1481.5,212.25 L1502.5,237 L1485.25,237 L1471.75,221.25 Z M1423.25,222.5 C1430.75004,222.5 1437.66664,221.291679 1444,218.875 C1450.33336,216.458321 1456.16664,213.166687 1461.5,209 L1439.25,182.5 L1456.5,182.5 L1470.75,199.5 C1476.58336,192.499965 1481.08332,184.541711 1484.25,175.625 C1487.41668,166.708289 1489,157.58338 1489,148.25 C1489,138.583285 1487.37502,129.291711 1484.125,120.375 C1480.87498,111.458289 1476.33336,103.583368 1470.5,96.75 C1464.66664,89.9166325 1457.75004,84.4166875 1449.75,80.25 C1441.74996,76.0833125 1432.91672,74 1423.25,74 C1413.24995,74 1404.16671,76.1249787 1396,80.375 C1387.83329,84.6250213 1380.91669,90.249965 1375.25,97.25 C1369.58331,104.250035 1365.20835,112.208289 1362.125,121.125 C1359.04165,130.041711 1357.5,139.083287 1357.5,148.25 C1357.5,157.916715 1359.08332,167.208289 1362.25,176.125 C1365.41668,185.041711 1369.91664,192.958299 1375.75,199.875 C1381.58336,206.791701 1388.49996,212.291646 1396.5,216.375 C1404.50004,220.458354 1413.41662,222.5 1423.25,222.5 L1423.25,222.5 Z" id="CachetHQ" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                            </g>
                        </g>
                    </svg>
                </div>

                <br>

                <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" autocomplete="off" name="{{ str_random(10) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @if(Session::has('error'))
                    <p>{{ Session::get('error') }}</p>
                    @endif

                    <div class="form-group">
                        <label class="sr-only">{{ trans('forms.login.email') }}</label>
                        <input autocomplete="off" class="form-control login-input" placeholder="{{ trans('forms.login.email') }}" required="required" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">{{ trans('forms.login.password') }}</label>
                        <input autocomplete="off" class="form-control login-input" placeholder="{{ trans('forms.login.password') }}" required="required" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <a class="btn btn-white btn-trans" href="{{ route('status-page') }}">
                                    <span class="text-center">
                                        <i class="ion-home"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-lg btn-block btn-white btn-trans">{{ trans('dashboard.login.login') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
