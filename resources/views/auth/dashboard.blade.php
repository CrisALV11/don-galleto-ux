@extends('layout')
@section('title')
    Dashboard
@endsection

@section('link')
@endsection

@section('content')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body pt-5">
            <div class="d-flex flex-column justify-content-between flex-grow-1">
                <h2 class="pt-3">¡Anuncio importante!</h2>
                <p class="text-gray-600 fs-6 fw-bold pt-4 mb-0">Poco inventario de galletas de jengibre</p>
            </div>
            <!--begin::Info-->
            <div class="d-flex flex-stack pt-8">
                <span class="badge badge-light-primary fs-7 fw-boldest me-2">Noviembre 13, 2022</span>
            </div>
        </div>
    </div>
    <div class="col-xxl-8">
        <div class="card card-xxl-stretch mb-5 mb-xxl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-boldest text-dark">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"><h2>Ventas de los últimos 30 días<h2></font>
                        </font>
                    </span>
                    <span class="text-gray-400 mt-2 fw-bold fs-6">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">22 mil pesos de ingresos totales</font>
                        </font>
                    </span>
                </h3>
            </div>
            <div class="card-body p-0">
                <div class="px-4 mt-7" id="kt_charts_widget_1_chart_2" style="height: 350px; min-height: 365px;">
                    <div id="apexcharts84aq6t95" class="apexcharts-canvas apexcharts84aq6t95 apexcharts-theme-light"
                        style="width: 768px; height: 350px;"><svg id="SvgjsSvg1569" width="768" height="350"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable"
                            xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1571" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(40.73828125, 30)">
                                <defs id="SvgjsDefs1570">
                                    <clipPath id="gridRectMask84aq6t95">
                                        <rect id="SvgjsRect1575" width="708.51953125" height="285.348" x="-3.5"
                                            y="-1.5" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="gridRectMarkerMask84aq6t95">
                                        <rect id="SvgjsRect1576" width="705.51953125" height="286.348" x="-2"
                                            y="-2" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <g id="SvgjsG1583" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1584" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText1586" font-family="inherit" x="0" y="311.348"
                                            text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#a1a5b7"
                                            class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1587">Nov 15</tspan>
                                            <title>Nov 15</title>
                                        </text><text id="SvgjsText1589" font-family="inherit" x="233.83984375"
                                            y="311.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#a1a5b7"
                                            class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1590">Dec 1</tspan>
                                            <title>Dec 1</title>
                                        </text><text id="SvgjsText1592" font-family="inherit" x="467.6796875"
                                            y="311.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#a1a5b7"
                                            class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1593">Dec 15</tspan>
                                            <title>Dec 15</title>
                                        </text><text id="SvgjsText1595" font-family="inherit" x="701.51953125"
                                            y="311.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#a1a5b7"
                                            class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1596">Jan 1</tspan>
                                            <title>Jan 1</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1613" class="apexcharts-grid">
                                    <g id="SvgjsG1614" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine1616" x1="0" y1="0" x2="701.51953125"
                                            y2="0" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1617" x1="0" y1="47.058" x2="701.51953125"
                                            y2="47.058" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1618" x1="0" y1="94.116" x2="701.51953125"
                                            y2="94.116" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1619" x1="0" y1="141.174" x2="701.51953125"
                                            y2="141.174" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1620" x1="0" y1="188.232" x2="701.51953125"
                                            y2="188.232" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1621" x1="0" y1="235.29" x2="701.51953125"
                                            y2="235.29" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1622" x1="0" y1="282.348" x2="701.51953125"
                                            y2="282.348" stroke="#eff2f5" stroke-dasharray="4"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1615" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1624" x1="0" y1="282.348" x2="701.51953125"
                                        y2="282.348" stroke="transparent" stroke-dasharray="0"></line>
                                    <line id="SvgjsLine1623" x1="0" y1="1" x2="0"
                                        y2="282.348" stroke="transparent" stroke-dasharray="0"></line>
                                </g>
                                <g id="SvgjsG1577" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1578" class="apexcharts-series" seriesName="NetxProfit"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1581"
                                            d="M -1870.7187499999998 282.348L -1870.7187499999998 109.80200000000002C -1788.8748046874998 109.80200000000002 -1718.7228515625 109.80200000000002 -1636.87890625 109.80200000000002C -1555.0349609375 109.80200000000002 -1484.8830078125 188.23200000000006 -1403.0390625 188.23200000000006C -1321.1951171875 188.23200000000006 -1251.0431640625 188.23200000000006 -1169.19921875 188.23200000000006C -1087.3552734375 188.23200000000006 -1017.2033203125 156.86000000000007 -935.3593749999999 156.86000000000007C -853.5154296874999 156.86000000000007 -783.3634765625 156.86000000000007 -701.51953125 156.86000000000007C -619.6755859375 156.86000000000007 -549.5236328125 70.58700000000005 -467.67968749999994 70.58700000000005C -385.83574218749993 70.58700000000005 -315.68378906249995 70.58700000000005 -233.83984374999997 70.58700000000005C -151.9958984375 70.58700000000005 -81.84394531249998 149.01700000000005 0 149.01700000000005C 81.84394531249998 149.01700000000005 151.9958984375 149.01700000000005 233.83984374999997 149.01700000000005C 315.68378906249995 149.01700000000005 385.83574218749993 227.44700000000006 467.67968749999994 227.44700000000006C 549.5236328125 227.44700000000006 619.6755859375 227.44700000000006 701.51953125 227.44700000000006C 783.3634765625 227.44700000000006 853.5154296874999 188.23200000000006 935.3593749999999 188.23200000000006C 1017.2033203125 188.23200000000006 1087.3552734375 188.23200000000006 1169.19921875 188.23200000000006C 1251.0431640625 188.23200000000006 1321.1951171875 54.90100000000007 1403.0390625 54.90100000000007C 1484.8830078125 54.90100000000007 1555.0349609375 54.90100000000007 1636.87890625 54.90100000000007C 1636.87890625 54.90100000000007 1636.87890625 54.90100000000007 1636.87890625 282.348M 1636.87890625 54.90100000000007z"
                                            fill="rgba(245,248,250,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMask84aq6t95)"
                                            pathTo="M -1870.7187499999998 282.348L -1870.7187499999998 109.80200000000002C -1788.8748046874998 109.80200000000002 -1718.7228515625 109.80200000000002 -1636.87890625 109.80200000000002C -1555.0349609375 109.80200000000002 -1484.8830078125 188.23200000000006 -1403.0390625 188.23200000000006C -1321.1951171875 188.23200000000006 -1251.0431640625 188.23200000000006 -1169.19921875 188.23200000000006C -1087.3552734375 188.23200000000006 -1017.2033203125 156.86000000000007 -935.3593749999999 156.86000000000007C -853.5154296874999 156.86000000000007 -783.3634765625 156.86000000000007 -701.51953125 156.86000000000007C -619.6755859375 156.86000000000007 -549.5236328125 70.58700000000005 -467.67968749999994 70.58700000000005C -385.83574218749993 70.58700000000005 -315.68378906249995 70.58700000000005 -233.83984374999997 70.58700000000005C -151.9958984375 70.58700000000005 -81.84394531249998 149.01700000000005 0 149.01700000000005C 81.84394531249998 149.01700000000005 151.9958984375 149.01700000000005 233.83984374999997 149.01700000000005C 315.68378906249995 149.01700000000005 385.83574218749993 227.44700000000006 467.67968749999994 227.44700000000006C 549.5236328125 227.44700000000006 619.6755859375 227.44700000000006 701.51953125 227.44700000000006C 783.3634765625 227.44700000000006 853.5154296874999 188.23200000000006 935.3593749999999 188.23200000000006C 1017.2033203125 188.23200000000006 1087.3552734375 188.23200000000006 1169.19921875 188.23200000000006C 1251.0431640625 188.23200000000006 1321.1951171875 54.90100000000007 1403.0390625 54.90100000000007C 1484.8830078125 54.90100000000007 1555.0349609375 54.90100000000007 1636.87890625 54.90100000000007C 1636.87890625 54.90100000000007 1636.87890625 54.90100000000007 1636.87890625 282.348M 1636.87890625 54.90100000000007z"
                                            pathFrom="M 0 282.348L 0 109.80200000000002C 25.57032552083333 109.80200000000002 47.48774739583333 109.80200000000002 73.05807291666666 109.80200000000002C 98.62839843749998 109.80200000000002 120.54582031249998 188.23200000000006 146.11614583333332 188.23200000000006C 171.68647135416666 188.23200000000006 193.60389322916666 188.23200000000006 219.17421875 188.23200000000006C 244.74454427083333 188.23200000000006 266.66196614583333 156.86000000000007 292.23229166666664 156.86000000000007C 317.8026171875 156.86000000000007 339.72003906249995 156.86000000000007 365.2903645833333 156.86000000000007C 390.8606901041667 156.86000000000007 412.7781119791666 70.58700000000005 438.3484375 70.58700000000005C 463.91876302083335 70.58700000000005 485.8361848958333 70.58700000000005 511.40651041666666 70.58700000000005C 536.9768359375 70.58700000000005 558.8942578125 149.01700000000005 584.4645833333333 149.01700000000005C 610.0349088541666 149.01700000000005 631.9523307291666 149.01700000000005 657.52265625 149.01700000000005C 683.0929817708333 149.01700000000005 705.0104036458333 227.44700000000006 730.5807291666666 227.44700000000006C 756.1510546874999 227.44700000000006 778.0684765625 227.44700000000006 803.6388020833333 227.44700000000006C 829.2091276041666 227.44700000000006 851.1265494791667 188.23200000000006 876.696875 188.23200000000006C 902.2672005208333 188.23200000000006 924.1846223958333 188.23200000000006 949.7549479166667 188.23200000000006C 975.3252734375 188.23200000000006 997.2426953125 54.90100000000007 1022.8130208333333 54.90100000000007C 1048.3833463541666 54.90100000000007 1070.3007682291666 54.90100000000007 1095.87109375 54.90100000000007C 1095.87109375 54.90100000000007 1095.87109375 54.90100000000007 1095.87109375 282.348M 1095.87109375 54.90100000000007z">
                                        </path>
                                        <path id="SvgjsPath1582"
                                            d="M -1870.7187499999998 109.80200000000002C -1788.8748046874998 109.80200000000002 -1718.7228515625 109.80200000000002 -1636.87890625 109.80200000000002C -1555.0349609375 109.80200000000002 -1484.8830078125 188.23200000000006 -1403.0390625 188.23200000000006C -1321.1951171875 188.23200000000006 -1251.0431640625 188.23200000000006 -1169.19921875 188.23200000000006C -1087.3552734375 188.23200000000006 -1017.2033203125 156.86000000000007 -935.3593749999999 156.86000000000007C -853.5154296874999 156.86000000000007 -783.3634765625 156.86000000000007 -701.51953125 156.86000000000007C -619.6755859375 156.86000000000007 -549.5236328125 70.58700000000005 -467.67968749999994 70.58700000000005C -385.83574218749993 70.58700000000005 -315.68378906249995 70.58700000000005 -233.83984374999997 70.58700000000005C -151.9958984375 70.58700000000005 -81.84394531249998 149.01700000000005 0 149.01700000000005C 81.84394531249998 149.01700000000005 151.9958984375 149.01700000000005 233.83984374999997 149.01700000000005C 315.68378906249995 149.01700000000005 385.83574218749993 227.44700000000006 467.67968749999994 227.44700000000006C 549.5236328125 227.44700000000006 619.6755859375 227.44700000000006 701.51953125 227.44700000000006C 783.3634765625 227.44700000000006 853.5154296874999 188.23200000000006 935.3593749999999 188.23200000000006C 1017.2033203125 188.23200000000006 1087.3552734375 188.23200000000006 1169.19921875 188.23200000000006C 1251.0431640625 188.23200000000006 1321.1951171875 54.90100000000007 1403.0390625 54.90100000000007C 1484.8830078125 54.90100000000007 1555.0349609375 54.90100000000007 1636.87890625 54.90100000000007"
                                            fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMask84aq6t95)"
                                            pathTo="M -1870.7187499999998 109.80200000000002C -1788.8748046874998 109.80200000000002 -1718.7228515625 109.80200000000002 -1636.87890625 109.80200000000002C -1555.0349609375 109.80200000000002 -1484.8830078125 188.23200000000006 -1403.0390625 188.23200000000006C -1321.1951171875 188.23200000000006 -1251.0431640625 188.23200000000006 -1169.19921875 188.23200000000006C -1087.3552734375 188.23200000000006 -1017.2033203125 156.86000000000007 -935.3593749999999 156.86000000000007C -853.5154296874999 156.86000000000007 -783.3634765625 156.86000000000007 -701.51953125 156.86000000000007C -619.6755859375 156.86000000000007 -549.5236328125 70.58700000000005 -467.67968749999994 70.58700000000005C -385.83574218749993 70.58700000000005 -315.68378906249995 70.58700000000005 -233.83984374999997 70.58700000000005C -151.9958984375 70.58700000000005 -81.84394531249998 149.01700000000005 0 149.01700000000005C 81.84394531249998 149.01700000000005 151.9958984375 149.01700000000005 233.83984374999997 149.01700000000005C 315.68378906249995 149.01700000000005 385.83574218749993 227.44700000000006 467.67968749999994 227.44700000000006C 549.5236328125 227.44700000000006 619.6755859375 227.44700000000006 701.51953125 227.44700000000006C 783.3634765625 227.44700000000006 853.5154296874999 188.23200000000006 935.3593749999999 188.23200000000006C 1017.2033203125 188.23200000000006 1087.3552734375 188.23200000000006 1169.19921875 188.23200000000006C 1251.0431640625 188.23200000000006 1321.1951171875 54.90100000000007 1403.0390625 54.90100000000007C 1484.8830078125 54.90100000000007 1555.0349609375 54.90100000000007 1636.87890625 54.90100000000007"
                                            pathFrom="M 0 109.80200000000002C 25.57032552083333 109.80200000000002 47.48774739583333 109.80200000000002 73.05807291666666 109.80200000000002C 98.62839843749998 109.80200000000002 120.54582031249998 188.23200000000006 146.11614583333332 188.23200000000006C 171.68647135416666 188.23200000000006 193.60389322916666 188.23200000000006 219.17421875 188.23200000000006C 244.74454427083333 188.23200000000006 266.66196614583333 156.86000000000007 292.23229166666664 156.86000000000007C 317.8026171875 156.86000000000007 339.72003906249995 156.86000000000007 365.2903645833333 156.86000000000007C 390.8606901041667 156.86000000000007 412.7781119791666 70.58700000000005 438.3484375 70.58700000000005C 463.91876302083335 70.58700000000005 485.8361848958333 70.58700000000005 511.40651041666666 70.58700000000005C 536.9768359375 70.58700000000005 558.8942578125 149.01700000000005 584.4645833333333 149.01700000000005C 610.0349088541666 149.01700000000005 631.9523307291666 149.01700000000005 657.52265625 149.01700000000005C 683.0929817708333 149.01700000000005 705.0104036458333 227.44700000000006 730.5807291666666 227.44700000000006C 756.1510546874999 227.44700000000006 778.0684765625 227.44700000000006 803.6388020833333 227.44700000000006C 829.2091276041666 227.44700000000006 851.1265494791667 188.23200000000006 876.696875 188.23200000000006C 902.2672005208333 188.23200000000006 924.1846223958333 188.23200000000006 949.7549479166667 188.23200000000006C 975.3252734375 188.23200000000006 997.2426953125 54.90100000000007 1022.8130208333333 54.90100000000007C 1048.3833463541666 54.90100000000007 1070.3007682291666 54.90100000000007 1095.87109375 54.90100000000007">
                                        </path>
                                        <g id="SvgjsG1579" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1632" r="0" cx="0"
                                                    cy="0" class="apexcharts-marker wijrw1lz5 no-pointer-events"
                                                    stroke="#50cd89" fill="#f5f8fa" fill-opacity="1" stroke-width="3"
                                                    stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1580" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1626" x1="0" y1="0" x2="0" y2="282.348"
                                    stroke="#50cd89" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0"
                                    y="0" width="1" height="282.348" fill="#b1b9c4" filter="none"
                                    fill-opacity="0.9" stroke-width="1"></line>
                                <line id="SvgjsLine1627" x1="0" y1="0" x2="701.51953125" y2="0"
                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1628" x1="0" y1="0" x2="701.51953125" y2="0"
                                    stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1629" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1630" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1631" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect1633" width="0" height="0" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect1634" width="0" height="0" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                            </g>
                            <g id="SvgjsG1597" class="apexcharts-yaxis" rel="0"
                                transform="translate(10.73828125, 0)">
                                <g id="SvgjsG1598" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1599"
                                        font-family="inherit" x="20" y="31.6" text-anchor="end"
                                        dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7"
                                        class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1600">54</tspan>
                                    </text><text id="SvgjsText1601" font-family="inherit" x="20"
                                        y="78.65799999999999" text-anchor="end" dominant-baseline="auto"
                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                        class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1602">48</tspan>
                                    </text><text id="SvgjsText1603" font-family="inherit" x="20"
                                        y="125.71599999999998" text-anchor="end" dominant-baseline="auto"
                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                        class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1604">42</tspan>
                                    </text><text id="SvgjsText1605" font-family="inherit" x="20"
                                        y="172.77399999999997" text-anchor="end" dominant-baseline="auto"
                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                        class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1606">36</tspan>
                                    </text><text id="SvgjsText1607" font-family="inherit" x="20"
                                        y="219.83199999999997" text-anchor="end" dominant-baseline="auto"
                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                        class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1608">30</tspan>
                                    </text><text id="SvgjsText1609" font-family="inherit" x="20" y="266.89"
                                        text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400"
                                        fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1610">24</tspan>
                                    </text><text id="SvgjsText1611" font-family="inherit" x="20" y="313.948"
                                        text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400"
                                        fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: inherit;">
                                        <tspan id="SvgjsTspan1612">18</tspan>
                                    </text></g>
                            </g>
                            <rect id="SvgjsRect1625" width="0" height="0" x="0" y="0"
                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1572" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 175px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(245, 248, 250);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-label"></span><span
                                            class="apexcharts-tooltip-text-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;">
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-8">
        <!--begin::Table Widget 1-->
        <div class="card card-xxl-stretch mb-5 mb-xxl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5 pb-3">
                <!--begin::Heading-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-boldest text-gray-800 fs-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"><h2>Galleta en inventario</h2></font>
                        </font>
                    </span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0">
                <!--begin::Table responsive-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                        <!--begin::Table body-->
                        <tbody>
                            <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                <th class="min-w-200px px-0">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Galleta</font>
                                    </font>
                                </th>
                                <th class="min-w-125px">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Stock</font>
                                    </font>
                                </th>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <a href="#"
                                                class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Chocolate</font>
                                                </font>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">65%</font>
                                            </font>
                                        </span>
                                        <div class="progress bg-light-warning w-100 h-5px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <a href="#"
                                                class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Vainilla</font>
                                                </font>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">85%</font>
                                            </font>
                                        </span>
                                        <div class="progress bg-light-primary w-100 h-5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <a href="#"
                                                class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Avena</font>
                                                </font>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">47%</font>
                                            </font>
                                        </span>
                                        <div class="progress bg-light-danger w-100 h-5px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 47%">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <a href="#"
                                                class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Jengibre</font>
                                                </font>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">71%</font>
                                            </font>
                                        </span>
                                        <div class="progress bg-light-info w-100 h-5px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 71%">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table responsive-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Table Widget 1-->
    </div>
@endsection

@section('script')
@endsection
