@include('App.Content.panelHeader')
@include('App.Content.js')
<link rel="stylesheet" href="{{ asset('/assets/vendor/libs/nouislider/nouislider.css') }}">
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
            <div class="card" style="height: 100%">
                <ul class="changeBuySell" dir="ltr">
                    <li class="tab-btn sell">فروش</li>
                    <li class="tab-btn buy active">خرید</li>
                </ul>
                <ul class="nav nav-tabs tabs-line" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-top-home" aria-controls="navs-tabs-line-top-home" aria-selected="true">
                            قیمت بازار
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-top-profile" aria-controls="navs-tabs-line-top-profile" aria-selected="false">
                            قیمت دلخواه
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-tabs-line-top-home" role="tabpanel">
                        <div class="inputPlace position-relative">
                            <label for="amount">مقدار</label>
                            <input id="span" class="d-none">
                            <input type="number" id="amount" placeholder="مقدار را وارد کنید"/>
                            <span class="selectCoin"><span class="quoteName me-1" id="selectCoinForTrade">USDT </span></span>
                        </div>
                        <div id="changeAmount" class="my-4"></div>
                        <div class="mb-5">
                            <span>موجودی قابل معامله :</span>
                            <span class="float-end" dir="ltr"><span class="quoteName">USDT</span><span class="me-2 quoteAvailable">0.000</span></span>
                        </div>
                        <div class="buttonPlace">
                            <button type="button" class="btn btn-custom-success btn-block w-100" id="submitMarket" side="buy"> خرید <span class="ms-2 baseName"> BTC </span></button>
                        </div>
                        <div class="border-top w-100 pt-3 mt-3">
                            <label>دارایی ها و موجودی ها</label>
                            <button type="button" class="btn btn-label-secondary position-relative float-end" data-bs-toggle="modal" data-bs-target="#transferAsset" style="top: -4px;">
                                <span class="tf-icons bx bx-transfer-alt me-1"></span>جابه جایی
                            </button>
                            <div class="mt-5">
                                <div class="d-inline-block">موجودی <span class="quoteName">USDT</span> : </div>
                                <span class="quoteTotal">0.000</span>
                            </div>
                            <div class="mt-3">
                                <div class="d-inline-block">موجودی <span class="baseName">BTC</span> : </div>
                                <span class="baseTotal">0.000</span>
                            </div>
                        </div>
                        <div class="border-top w-100 pt-3 mt-3">
                            <div class="mt-3">
                                <div class="d-inline-block"> PnL معامله <span class="baseName">BTC</span> : </div>
                                <span>0.000</span>
                            </div>
                            <div class="mt-3">
                                <div class="d-inline-block"> هزینه سفارش : </div>
                                <span>0.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-tabs-line-top-profile" role="tabpanel">
                        <div class="inputPlace position-relative">
                            <label for="price">قیمت</label>
                            <input type="number" id="price" placeholder="قیمت را وارد کنید"/>
                            <span class="selectCoin quoteName">BTC</span>
                        </div>
                        <div class="inputPlace position-relative mt-2">
                            <label for="amount">مقدار</label>
                            <input type="number" id="amount2" placeholder="مقدار را وارد کنید"/>
                            <span class="selectCoin baseName">BTC</span>
                        </div>
                        <div id="changeAmountLimit" class="my-4"></div>
                        <div class="inputPlace position-relative mt-2">
                            <label for="value">ارزش معامله</label>
                            <input type="number" id="values" placeholder="مقدار را وارد کنید"/>
                            <span class="selectCoin quoteName">USDT</span>
                        </div>
                        <div class="mb-5 mt-3">
                            <span>موجودی قابل معامله :</span>
                            <span class="float-end" dir="ltr"><span class="quoteName">USDT</span><span class="me-2 quoteAvailable">0.000</span></span>
                        </div>
                        <div class="buttonPlace">
                            <button type="button" class="btn btn-custom-success btn-block w-100"> خرید <span class="ms-2 baseName"> BTC </span></button>
                        </div>
                        <div class="border-top w-100 pt-3 mt-3">
                            <label>دارایی ها و موجودی ها</label>
                            <button type="button" class="btn btn-label-secondary position-relative float-end" data-bs-toggle="modal" data-bs-target="#transferAsset" style="top: -4px;">
                                <span class="tf-icons bx bx-transfer-alt me-1"></span>جابه جایی
                            </button>
                            <div class="mt-5">
                                <div class="d-inline-block">موجودی <span class="quoteName">USDT</span> : </div>
                                <span class="quoteTotal">0.000</span>
                            </div>
                            <div class="mt-3">
                                <div class="d-inline-block">موجودی <span class="baseName">BTC</span> : </div>
                                <span class="baseTotal">0.000</span>
                            </div>
                        </div>
                        <div class="border-top w-100 pt-3 mt-3">
                            <div class="mt-3">
                                <div class="d-inline-block"> PnL معامله <span class="baseName">BTC</span> : </div>
                                <span>0.000</span>
                            </div>
                            <div class="mt-3">
                                <div class="d-inline-block"> هزینه سفارش : </div>
                                <span>0.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-12 d-flex">
            <div class="card w-25 text-end d-inline-block" dir="ltr">
                <label class="py-3 px-3 border-bottom w-100">Order Book</label>
                <div class="orderbook-header">
                    <div class="btn-group py-2 px-3">
                        <button class="el-tooltip bg-transparent border-0 button active" id="order_book" title="order book" aria-describedby="el-tooltip-5514" tabindex="0">
                            <img src="data:image/svg+xml;base64,PHN2ZwogICAgICAgIHdpZHRoPSIxNCIKICAgICAgICBoZWlnaHQ9IjExIgogICAgICAgIHZpZXdCb3g9IjAgMCAxNCAxMSIKICAgICAgICBmaWxsPSJub25lIgogICAgICAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKPgogICAgPHJlY3QgeD0iNyIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMy40MDAwMiIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iNi42OTk5NSIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMTAiIHdpZHRoPSI2LjQiIGhlaWdodD0iMSIgZmlsbD0iIzhEOTZBNiIgLz4KICAgIDxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjQuNSIgZmlsbD0iI0ZGNEE0OSIgLz4KICAgIDxyZWN0IHk9IjYuNSIgd2lkdGg9IjUiIGhlaWdodD0iNC41IiBmaWxsPSIjMjZDNDg3IiAvPgo8L3N2Zz4K" alt="">
                        </button>
                        <button class="el-tooltip bg-transparent border-0 button" id="buy_order" title="buy order" aria-describedby="el-tooltip-4876" tabindex="0">
                            <img src="data:image/svg+xml;base64,PHN2ZwogICAgICAgIHdpZHRoPSIxNCIKICAgICAgICBoZWlnaHQ9IjExIgogICAgICAgIHZpZXdCb3g9IjAgMCAxNCAxMSIKICAgICAgICBmaWxsPSJub25lIgogICAgICAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKPgogICAgPHJlY3QgeD0iNyIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMy40MDAwMiIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iNi42OTk5NSIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMTAiIHdpZHRoPSI2LjQiIGhlaWdodD0iMSIgZmlsbD0iIzhEOTZBNiIgLz4KICAgIDxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjExIiBmaWxsPSIjMjZDNDg3IiAvPgo8L3N2Zz4K" alt="">
                        </button>
                        <button class="el-tooltip bg-transparent border-0 button" id="sell_order" title="sell order" aria-describedby="el-tooltip-6813" tabindex="0">
                            <img src="data:image/svg+xml;base64,PHN2ZwogICAgICAgIHdpZHRoPSIxNCIKICAgICAgICBoZWlnaHQ9IjExIgogICAgICAgIHZpZXdCb3g9IjAgMCAxNCAxMSIKICAgICAgICBmaWxsPSJub25lIgogICAgICAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKPgogICAgPHJlY3QgeD0iNyIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMy40MDAwMiIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iNi42OTk5NSIgd2lkdGg9IjYuNCIgaGVpZ2h0PSIxIiBmaWxsPSIjOEQ5NkE2IiAvPgogICAgPHJlY3QgeD0iNyIgeT0iMTAiIHdpZHRoPSI2LjQiIGhlaWdodD0iMSIgZmlsbD0iIzhEOTZBNiIgLz4KICAgIDxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjExIiBmaWxsPSIjRkY0QTQ5IiAvPgo8L3N2Zz4K" alt="">
                        </button>
                    </div>
                </div>
                <div class="order_book_show">
                    <table class="w-100">
                        <thead>
                        <tr class="border-bottom pb-3">
                            <th class="text-center">
                                قیمت USDT
                            </th>
                            <th class="text-center">
                                مقدار BTC
                            </th>
                            <th class="text-center">
                                مجموع
                            </th>
                        </tr>
                        </thead>
                        <tbody class="sellOrder">
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr data-row="0">
                            <td style="line-height: 35px" class="text-center py-2" colspan="3"><span>0.25</span></td>
                        </tr>
                        </tbody>
                        <tbody class="buyOrder">
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr style="line-height: 35px" class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buy_order_show" style="display: none;">
                    <table class="w-100">
                        <thead>
                        <tr class="border-bottom pb-3">
                            <th class="text-center">
                                قیمت USDT
                            </th>
                            <th class="text-center">
                                مقدار BTC
                            </th>
                            <th class="text-center">
                                مجموع
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-row="0">
                            <td class="text-center py-2" colspan="3"><span>0.25</span></td>
                        </tr>
                        </tbody>
                        <tbody class="buyOrder">
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-success">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sell_order_show" style="display: none;">
                    <table class="w-100">
                        <thead>
                        <tr class="border-bottom pb-3">
                            <th class="text-center">
                                قیمت USDT
                            </th>
                            <th class="text-center">
                                مقدار BTC
                            </th>
                            <th class="text-center">
                                مجموع
                            </th>
                        </tr>
                        </thead>
                        <tbody class="sellOrder">
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tr class="border-bottom pb-2 alert-danger">
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0012
                            </td>
                            <td class="text-center">
                                0.0144
                            </td>
                        </tr>
                        <tbody>
                        <tr data-row="0">
                            <td class="text-center py-2" colspan="3"><span>0.25</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-75 d-inline-block ms-3 h-100">
                <div class="d-grid">
                    <div class="card w-100">
                        <div class="row px-3 py-3">
                            <div class="col-4">
                                <label for="select2Exchange" class="form-label">انتخاب حساب صرافی</label>
                                <select id="select2Exchange" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    @if(count($connection) == 0)
                                        <option value=" " selected disabled>اتصال تایید شده ای ندارید</option>
                                    @else
                                        <option></option>
                                        @foreach($connection as $list)
                                            <option value="{{ $list->connectionId }}" exchange-id="{{ $list->exchange_id }}" data-exchange="{{ $list->exchange_id }}">{{ fa($list->accountName) }} - {{ $list->connection[0]['en_exchangeName'] }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="select2Pairs" class="form-label">جفت ارز</label>
                                <select id="select2Pairs" class="select2 form-select form-select-lg" onChange="getAsetPair($(this).val() ,$('#select2Exchange').val(),$(this).find(':selected').text(),$('option:selected', this).attr('data-base'),$('option:selected', this).attr('data-quote'));" data-allow-clear="true">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3" style="height: 749px">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_a46d3" style="height: 749px"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget(
                                    {
                                        "autosize": true,
                                        "symbol": "BYBIT:BTCUSDT.P",
                                        "interval": "D",
                                        "timezone": "Etc/UTC",
                                        "theme": 'dark',
                                        "style": "1",
                                        "locale": "en",
                                        "hide_side_toolbar": false,
                                        "toolbar_bg": "#f1f3f6",
                                        "enable_publishing": false,
                                        "allow_symbol_change": true,
                                        "container_id": "tradingview_a46d3"
                                    }
                                );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                                دارایی ها
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" tabindex="-1">
                                 سفارشات<span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger ms-1">3</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">نام ارز</th>
                                        <th class="text-center">موجودی کل</th>
                                        <th class="text-center">موجودی درگیر سفارش</th>
                                        <th class="text-center">موجودی آزاد</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr data-row="0" class="kt-datatable__row kt-datatable__row--even">
                                            <td class="kt-datatable__cell text-center p-5" colspan="5"><span>دارایی برای نمایش وجود ندارد</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">نام ارز</th>
                                        <th class="text-center">نوع سفارش</th>
                                        <th class="text-center">مقدار</th>
                                        <th class="text-center">قیمت</th>
                                        <th class="text-center">کنترل معامله</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    <tr data-row="0" class="kt-datatable__row kt-datatable__row--even">
                                        <td class="kt-datatable__cell text-center p-5" colspan="6"><span>سفارشی برای نمایش وجود ندارد</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="transferAsset" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title secondary-font" id="modalCenterTitle">جابه جایی بین بازار تتر</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="selectTransfer position-relative" data-side="from">
                            <label for="amount"><span class="asset cp" data-side="from">-</span>از :</label>
                            <div class="selectWallet" data-side="from"><span class="market">بازار یک طرفه</span><i class='bx bxs-down-arrow'></i></div>
                            <ul class="listOfWallet" data-side="from">
                                <li class="walletItem" data-side="from" value="spot">بازار یک طرفه</li>
                                <li class="walletItem" data-side="from" value="swap">بازار دوطرفه</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="selectTransfer position-relative" data-side="to">
                            <label for="amount"><span class="asset" data-side="to">-</span>به :</label>
                            <div class="selectWallet" data-side="to"><span class="market">بازار دوطرفه </span><i class='bx bxs-down-arrow'></i></div>
                            <ul class="listOfWallet" data-side="to">
                                <li class="walletItem" data-side="to" value="spot">بازار یک طرفه</li>
                                <li class="walletItem" data-side="to" value="swap">بازار دوطرفه</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="inputPlace position-relative">
                            <label for="amount">مقدار</label>
                            <input type="number" id="amount3" placeholder="مقدار را وارد کنید"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="border-top mt-3 pt-3">
                            @if($user->tradePass == '')
                                <div class="alert alert-danger alert-bold" role="alert" style="margin: 0px;">
                                    <div class="alert-text">جهت انجام انتقال موجودی نیاز به رمز معامله می باشد</div>
                                </div>
                            @else
                                <div class="inputPlace position-relative">
                                    <label for="2fa">رمز یکبار مصرف</label>
                                    <input type="number" id="2fa" placeholder="مقدار را وارد کنید"/>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                    بستن
                </button>
                @if($user->tradePass != '')
                    <button type="button" class="btn btn-warning submitTransfer">جا به جایی</button>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/assets/vendor/js/wNumb.min.js') }}"></script>
<script src="{{ asset('/js/websocket.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/nouislider/nouislider.js') }}"></script>
<script src="{{ asset('/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('/assets/js/forms-selects.js') }}"></script>
<script>
    //****************************************************************** GENERAL ******************************************************************//
    var symbol = 'BTCUSDT';
    var base = "BTC";
    var quote = "USDT";
    var cryptoVar = "BTCUSDT";
    var exchangeVar = "BINANCE";
    //order book
    var ws = new WebSocket('wss://stream.bybit.com/spot/quote/ws/v1');
    async function getVal (e){
        ws = await new WebSocket('wss://stream.bybit.com/spot/quote/ws/v1');
        ws.onopen =function(){
            ws.send(`{
                        "topic": "depth",
                        "event": "sub",
                        "symbol": "${e}",
                        "params": {
                        "binary": false
                        }
                        }`);

            ws.send(`{
                        "topic": "trade",
                        "event": "sub",
                        "symbol": "${e}",
                        "params": {
                        "binary": false
                        }
                    }`);
        };
        ws.onmessage = function(msg){
            let myData = JSON.parse(msg?.data);
            if (myData.topic === 'depth'){
                $('.orderBook .sell .data').html('<div class="row pb-3 pt-3 bg-custom-danger border-bottom d-none"><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div></div>');
                $('.orderBook .buy .data').html('<div class="row pb-3 pt-3 bg-custom-success border-bottom d-none"><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div></div>');
                myData.data[0].b.sort((a, b) => b[0] - a[0]).filter((v, i) => i <= 4).map((v, i) => {
                    $('.orderBook .sell .data').append('<div class="row pb-3 pt-3 bg-custom-danger border-bottom">'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[0])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[1])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum((v[0] * v[1]).toFixed(2))+
                        '<\/div>'+
                        '<\/div>');
                });

                myData.data[0].a.sort((a, b) => a[0] - b[0]).filter((v, i) => i <= 4).sort((a, b) => b[0] - a[0]).map((v, i) => {
                    $('.orderBook .buy .data').append('<div class="row pb-3 pt-3 bg-custom-success border-bottom">'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[0])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[1])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum((v[0] * v[1]).toFixed(2))+
                        '<\/div>'+
                        '</div>');
                });
            };
            if(myData.topic === 'trade'){
                myData?.data?.map((v, i)=>{
                    $('.ave .row').html('<span>' + Enum_To_Pnum(v.p) + '</span>')
                });
            };
        };
    }
    getVal('BTCUSDT');
    async function myFunction() {
        await ws.close();
    };
    function displayNumber(number) {
        if(Number.isInteger(number)) {
            console.log(number);
            return parseInt(number);
        } else {
            console.log(number);
            return parseFloat(number).toFixed(2);
        }
    }
    $(document).ready(function(){
    });
    //****************************************************************** GENERAL ******************************************************************//

    //****************************************************************** ORDERBOOK ******************************************************************//
    //order book
    var ws = new WebSocket('wss://stream.bybit.com/spot/quote/ws/v1');
    async function getVal (e){
        ws = await new WebSocket('wss://stream.bybit.com/spot/quote/ws/v1');
        ws.onopen =function(){
            ws.send(`{
                        "topic": "depth",
                        "event": "sub",
                        "symbol": "${e}",
                        "params": {
                        "binary": false
                        }
                        }`);

            ws.send(`{
                        "topic": "trade",
                        "event": "sub",
                        "symbol": "${e}",
                        "params": {
                        "binary": false
                        }
                    }`);
        };
        ws.onmessage = function(msg){
            let myData = JSON.parse(msg?.data);
            if (myData.topic === 'depth'){
                $('.orderBook .sell .data').html('<div class="row pb-3 pt-3 bg-custom-danger border-bottom d-none"><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div></div>');
                $('.orderBook .buy .data').html('<div class="row pb-3 pt-3 bg-custom-success border-bottom d-none"><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div><div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center"> </div></div>');
                myData.data[0].b.sort((a, b) => b[0] - a[0]).filter((v, i) => i <= 4).map((v, i) => {
                    $('.orderBook .sell .data').append('<div class="row pb-3 pt-3 bg-custom-danger border-bottom">'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[0])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[1])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum((v[0] * v[1]).toFixed(2))+
                        '<\/div>'+
                        '<\/div>');
                });

                myData.data[0].a.sort((a, b) => a[0] - b[0]).filter((v, i) => i <= 4).sort((a, b) => b[0] - a[0]).map((v, i) => {
                    $('.orderBook .buy .data').append('<div class="row pb-3 pt-3 bg-custom-success border-bottom">'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[0])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum(v[1])+
                        '<\/div>'+
                        '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-center">'+
                        Enum_To_Pnum((v[0] * v[1]).toFixed(2))+
                        '<\/div>'+
                        '</div>');
                });
            };
            if(myData.topic === 'trade'){
                myData?.data?.map((v, i)=>{
                    $('.ave .row').html('<span>' + Enum_To_Pnum(v.p) + '</span>')
                });
            };
        };
    }
    getVal('BTCUSDT');
    async function myFunction() {
        await ws.close();
    };
    //order book
    //****************************************************************** ORDERBOOK ******************************************************************//

    //****************************************************************** GENERAL ******************************************************************//

    //****************************************************************** EXCHANGE ******************************************************************//
    $('#select2Exchange').on('change',function(){
        var exchange_id = $('option:selected', this).attr('exchange-id');
        var exchange = $('option:selected', this).attr('data-exchange');
        var connectionId = $('option:selected', this).val();
        var account = $(this).find(':selected').text();
        var exId = $('option:selected', this).attr('exchange-id');
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        formData.append('exchange', exchange);
        $('select[name=pairs]').html('');
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_spot_getPairs') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    $('.transferAsset').attr('id',connectionId);
                    $('.transferAsset').attr('data-exchange-name',exchange);
                    $('.transferAsset').attr('data-connection-name',account);
                    var html = '';
                    var setBitcoin = false;
                    var bitId = 0;
                    exchangeVar = exchange_id;
                    $.each( resultData.data, function( key, value ) {
                        if(key == 0){
                            base = value.base;
                            quote = value.quote;
                            if(exchange_id == 'bingx'){
                                cryptoVar = value.base +''+ value.quote + '.p';
                            }else{
                                cryptoVar = value.base +''+ value.quote;
                            }
                        }
                        html = html + '<option value="'+value.id+'" data-base="'+ value.base +'" data-quote="'+ value.quote +'" symbol="'+ value.symbol +'" symbol-id="'+ value.symbol_id +'">'+ value.base +''+ value.quote +'</option>';
                        bitId = value.id;
                    });
                    $('#select2Pairs').html(html);
                    getAsetPair(bitId,connectionId,cryptoVar,base,quote);
                }else{
                    notifToast('error',null,resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    notifToast('error',null,value);
                });
            }
        });
    });
    function getAsetPair(pair,connection,pairsName,baseCoin,quoteCoin){
        var exchangeName = $('#select2Exchange').find(':selected').attr('exchangename');
        var exchange = $('option:selected', '#select2Exchange').attr('exchange-id');
        cryptoVar=pairsName;
        exchangeVar=exchange;
        base = baseCoin;
        quote = quoteCoin;
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        formData.append('pair', pair);
        formData.append('connection', connection);
        $('#quoteAvailable').html('0.000');
        $('#baseAvailable').val('');
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_spot_getAvailable') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status) {
                    // $('#baseAvailable').val(resultData.baseAvailable);
                    $('#quoteAvailable').html(parseFloat(resultData.quoteAvailable).toFixed(3));
                    $('#quoteAvailable').attr('data-asset',parseFloat(resultData.quoteAvailable).toFixed(3));
                    $('.quoteAvailable').html(parseFloat(resultData.quoteAvailable).toFixed(3));
                    $('.quoteAvailable').attr('data-asset',parseFloat(resultData.quoteAvailable).toFixed(3));
                    $('.baseTotal').html(parseFloat(resultData.baseTotal));
                    $('.quoteTotal').html(parseFloat(resultData.quoteTotal));
                    $('.quoteName').html(quote);
                    $('.baseName').html(base);
                    $('.quoteName').attr('data-coin',quote);
                    $('.baseName').attr('data-coin',base);
                    var n = resultData.basePrecision;
                    n = (n + "").split(".");
                    //COMMENT BY ME
                    /*----------------------------
                    /*----------------------------
                    /*----------------------------
                    /*----------------------------
                    /*----------------------------
                    /*----------------------------*/
                    // $('#amount').attr('baseprecision',n[1].toString().length);
                    var m = resultData.minPricePrecision;
                    m = (m + "").split(".");
                    $('#price').attr('minpriceprecision',m[1].toString().length);
                    $('#value').attr('mintradeamount',resultData.minTradeAmount);
                    $('#value').attr('maxtradeamount',resultData.maxTradeAmount);
                    $('#amount').attr('mintradeamount',resultData.minTradeAmount);
                    $('#amount').attr('maxtradeamount',resultData.maxTradeAmount);
                    var html = '';
                    var i = 1;
                    $.each(resultData.assets , function (index , value){
                        html = html + '<tr class="kt-datatable__row kt-datatable__row--even"> <td class="kt-datatable__cell pr-3 text-center pt-3">'+ Enum_To_Pnum(i) +'</td><td class="kt-datatable__cell pt-3">'+ index +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.total +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.lock +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.available +'</td></tr>';
                        i += 1;
                    });
                    $('#assetTable').html(html);
                    var html2 = '';
                    var j = 1;
                    $.each(resultData.orders , function (index , value){
                        html2 = html2 + '<tr class="kt-datatable__row kt-datatable__row--even"><td class="kt-datatable__cell pr-3 text-center pt-3">'+ Enum_To_Pnum(j) +'</td><td class="kt-datatable__cell pt-3">'+ value.symbol +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.side +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.origQty +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.price +'</td><td class="kt-datatable__cell text-center"><a title="Delete Order" id="' + value.orderId + '" class="btn btn-sm btn-clean btn-icon btn-icon-md deleteOrder"> <i class="la la-trash"></i></a></td></tr>';
                        j += 1;
                    });
                    $('#ordersTable').html(html2);
                }else{
                    notifToast('error',null,resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    notifToast('error',null,value);
                });
            }
        });
    };
    //****************************************************************** EXCHANGE ******************************************************************//

    //****************************************************************** AMOUNT BUY MARKET ******************************************************************//
    $('#navs-tabs-line-top-home #amount').on('input',function () {
        let hasAvailable = $('#select2Exchange').val();
        if (!hasAvailable){
            notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
            $(this).val('');
            $('#select2Exchange').focus();
        }else {
            if (this.value !== '' || this.value !== this.defaultValue) {
                var orderValue = parseFloat($('#navs-tabs-line-top-home #amount').val());
                var minValue = parseFloat($('#navs-tabs-line-top-home #amount').attr('limit_amount_min'));
                var maxValue = parseFloat($('#navs-tabs-line-top-home #amount').attr('limit_amount_max'));
                var available = parseFloat($('#quoteAvailable').html());
                if (parseFloat(orderValue) < minValue) {
                    toastr.error(' حداقل ارزش معامله شما باید ' + minValue + 'باشد ! ');
                } else {
                    if ((maxValue != null || maxValue != '')) {
                        // sliderPercentageBuyMarket();
                    } else {
                        if (parseFloat(orderValue) > maxValue) {
                            toastr.error('حداکثر ارزش معامله شما باید ' + maxValue + 'باشد !');
                        } else {
                            if (parseFloat(orderValue) > available) {
                                toastr.error(' ارزش معامله شما باید کمتر از ' + available + 'باشد !');
                            } else {
                                // sliderPercentageBuyMarket();
                            }
                        }
                    }
                }
            }
        }
    });

    const changeAmount = document.getElementById('changeAmount'),
          sliderInput = document.getElementById('amount');
        //   sliderInput.value = 34;
    var isset = 0;
    var span = document.getElementById("span");
    var pricerenge= noUiSlider.create(changeAmount, {
        start: 0,
        connect: [true,false],
        range: {
            min: 0,
            max: 100
        }
    });
    pricerenge.on('update', function (values, handle) {
        console.log("a");
        var max =Number(document.querySelector(".me-2.quoteAvailable").innerText);
        console.log(max);
        if(max != 0 && isset == 0){
            isset = 1;
            changeAmount.noUiSlider.updateOptions({
                range: {
                    'min': 0,
                    'max': max
                }
            });
        }
        let hasAvailable = $('#select2Exchange').val();
        if (!hasAvailable){
            notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
            // sliderInput.value = 0;
            $('#select2Exchange').focus();
        }else{
            const value = values[handle];
            var slidernumber = pricerenge.get();
            console.log(value);
            console.log(slidernumber);
            console.log(pricerenge.get());
            sliderInput.value = pricerenge.get();
            console.log(sliderInput);
            console.log(sliderInput.value);
            sliderInput.classList.add("d-none");
           
            span.classList.remove("d-none");
            span.value = value;
        }
    });
    span.addEventListener("input",function(){
        sliderInput.value = span.value;
        span.classList.add("d-none");
        sliderInput.classList.remove("d-none");
        sliderInput.focus();
    })
    //****************************************************************** AMOUNT BUY MARKET ******************************************************************//

    //****************************************************************** PAIR ******************************************************************//
    //order amount limit buy
    $('#amount2').on('input',function(){
        var orderAmount = parseFloat($(this).val());
        var hasAvailable = $('#select2Exchange').val();
        var orderPrice = parseFloat($('#price').val());
        var available = parseFloat($('#quoteAvailable').attr('data-asset'));
        var minValue = parseFloat($('#value').attr('mintradeamount'));
        var maxValue = parseFloat($('#value').attr('maxtradeamount'));
        var digits = $(this).attr('baseprecision');
        const decimalPlaces = orderAmount.toString().split('.')[1] ? orderAmount.toString().split('.')[1].length : 0;
        var value = 0;
        if(hasAvailable === undefined || hasAvailable === null) {
            notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
        }else{
            if (!isNaN(orderAmount) && orderAmount > 0) {
                if(decimalPlaces > digits) {
                    notifToast('error',null,'تعداد ممیز های شما بیشتر از حد مجاز است');
                    $('#amount2').val(orderAmount.toFixed(digits));
                }else{
                    if (!isNaN(orderPrice) && parseFloat(orderPrice) > 0){
                        value = parseFloat(orderPrice) * parseFloat(orderAmount);
                        if(parseFloat(value) > parseFloat(available)){
                            notifToast('error',null,'ارزش سفارش شما ار موجودی شما بیشتر است!');
                            $('#amount2').val(1);
                            sliderPercentageBuyLimit();
                        }else{
                            if(parseFloat(value) < minValue){
                                notifToast('error',null,'حداقل ارزش سفارش شما باید '+ minValue +'باشد !');
                            }else{
                                if((maxValue == null || maxValue == '')){
                                    $('#value').val(parseFloat(value));
                                    sliderPercentageBuyLimit();
                                }else{
                                    if(parseFloat(value) > maxValue){
                                        notifToast('error',null,'حداکثر ارزش سفارش شما باید '+ maxValue +'باشد !');
                                    }else{
                                        $('#value').val(parseFloat(value));
                                        sliderPercentageBuyLimit();
                                    }
                                }
                                $('#value').val(parseFloat(value));
                                sliderPercentageBuyLimit();
                            }
                        }
                    }else{
                        $('#price').val(0);
                    }
                }
            }else{
                $('#value').val(0);
            }
        }
    });
    //order amount limit buy

    //order price limit buy
    $('#price').on('input',function(){
        var orderPrice = parseFloat($(this).val());
        var hasAvailable = $('#select2Exchange').val();
        var orderAmount = parseFloat($('#amount2').val());
        var minValue = parseFloat($('#value').attr('mintradeamount'));
        var maxValue = parseFloat($('#value').attr('maxtradeamount'));
        var available = parseFloat($('#quoteAvailable').attr('data-asset'));
        var digits = $(this).attr('minpriceprecision');
        const decimalPlaces = orderPrice.toString().split('.')[1] ? orderPrice.toString().split('.')[1].length : 0;
        var value = 0;
        if(hasAvailable === undefined || hasAvailable === null) {
            notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
            $('#price').val(0);
        }else {
            if (!isNaN(orderPrice) && orderPrice > 0) {
                if(decimalPlaces > digits) {
                    notifToast('error',null,'تعداد ممیز های شما بیشتر از حد مجاز است');
                    $('#price').val(orderPrice.toFixed(digits));
                }else{
                    if (!isNaN(orderAmount) && orderAmount > 0){
                        value = parseFloat(orderPrice) * parseFloat(orderAmount);
                        if(parseFloat(value) > parseFloat(available)){
                            notifToast('error',null,'ارزش سفارش شما ار موجودی شما بیشتر است!');
                            $('#price').val(1);
                            sliderPercentageBuyLimit();
                        }else{
                            if(parseFloat(value) < minValue) {
                                notifToast('error',null,'حداقل ارزش سفارش شما باید '+ minValue +'باشد !');
                            }else{
                                if((maxValue == null || maxValue == '')){
                                    $('#value').val(parseFloat(value));
                                    sliderPercentageBuyLimit();
                                }else{
                                    if(parseFloat(value) > maxValue){
                                        notifToast('error',null,'حداکثر ارزش سفارش شما باید '+ maxValue +'باشد !');
                                    }else{
                                        $('#value').val(parseFloat(value));
                                        sliderPercentageBuyLimit();
                                    }
                                }
                            }
                        }
                    }else{
                        $('#orderAmountLimitBuy').val(0);
                    }
                }
            }else{
                $('#orderValueLimitBuy').val(0);
            }
        }
    });
    //order price limit buy

    //order value limit buy
    $('#value').on('input',function(){
        var orderValue =  parseFloat($(this).val());
        var orderPrice = parseFloat($('#price').val());
        var digits = $('#amount2').attr('baseprecision');
        var minValue = parseFloat($(this).attr('mintradeamount'));
        var maxValue = parseFloat($(this).attr('maxtradeamount'));
        var available = parseFloat($('#quoteAvailable').attr('data-asset'));
        var hasAvailable = $('#select2Exchange').val();
        if(hasAvailable === undefined || hasAvailable === null) {
            notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
        }else{
            if(parseFloat(orderValue) < minValue) {
                notifToast('error',null,' حداقل ارزش سفارش شما باید '+ minValue +'باشد ! ');
            }else{
                if((maxValue == null || maxValue == '')){
                    if(!isNaN(orderPrice) && orderPrice > 0){
                        if(parseFloat(orderValue) > parseFloat(available)){
                            notifToast('error',null,'ارزش سفارش شما ار موجودی شما بیشتر است!');
                            $('#amount2').val(available);
                            sliderPercentageBuyLimit();
                        }else{
                            value = parseFloat(orderValue) / parseFloat(orderPrice);
                            if(isNaN(value)){
                                $('#amount2').val(0);
                            }else{
                                $('#amount2').val(parseFloat(value).toFixed(digits));
                                sliderPercentageBuyLimit();
                            }
                        }
                    }else{
                        notifToast('error',null,'لطفا ابتدا قیمت سفارش خود را انتخاب کنید !');
                        $('#value').val(0);
                    }
                }else{
                    if(parseFloat(orderValue) > maxValue){
                        notifToast('error',null,'حداکثر ارزش سفارش شما باید'+ maxValue +'باشد !');
                    }else{
                        if(!isNaN(orderPrice) && orderPrice > 0){
                            if(parseFloat(orderValue) > parseFloat(available)){
                                notifToast('error',null,'ارزش سفارش شما ار موجودی شما بیشتر است!');
                                $('#amount2').val(available);
                                sliderPercentageBuyLimit();
                            }else{
                                value = parseFloat(orderValue) / parseFloat(orderPrice);
                                if(isNaN(value)){
                                    $('#amount2').val(0);
                                }else{
                                    $('#amount2').val(parseFloat(value).toFixed(digits));
                                    sliderPercentageBuyLimit();
                                }
                            }
                        }else{
                            notifToast('error',null,'لطفا ابتدا قیمت سفارش خود را انتخاب کنید !');
                            $('#value').val(0);
                        }
                    }
                }
            }
        }
    });
    //order value limit buy

    const changeAmountLimit = document.getElementById('changeAmountLimit');
    mineSlidermax = 100;
    var mineSlider = noUiSlider.create(changeAmountLimit, {
        start: [0],
        connect: [true, false],
        range: {
            min: 0,
            max: mineSlidermax,
        },
            format: wNumb({
            decimals: 4,
            thousand: ',',
            suffix: ''
        }),
    });

    //calculate percentage and show in slider
    function sliderPercentageBuyLimit(){
        var available = parseFloat($('#quoteAvailable').attr('data-asset'));
        var orderValue = parseFloat($('#value').val());
        var value = parseFloat(orderValue) / parseFloat(available);
        var slider = changeAmountLimit;
        var temp = 0;
        if(parseFloat(value) === Infinity){
            temp = 0 * 100;
        }else{
            temp = parseFloat(value) * 100;
        }
        slider.noUiSlider.set(temp);
    };
    //calculate percentage and show in slider
    // کل پول ما دریافت خواهد کرد
    var maxim = 0;
    mineSlider.on('update', function (values, handle) {
        var available = parseFloat($('#quoteAvailable').attr('data-asset'));
        var price = document.getElementById("price");
        if(price.value == ""){
            notifToast('error',null,'لطفاً قیمت را انتخاب کنید!');
            sliderInput.value = 0;
        }else{
            var orderPrice = parseFloat($('#price').val());
            var digits = $('#amount').attr('baseprecision');
            var hasAvailable = $('#select2Exchange').val();
            const percentage = values[handle];
            var minValue = parseFloat($('#value').attr('mintradeamount'));
            var maxValue = parseFloat($('#value').attr('maxtradeamount'));
            var temp = percentage/100;
            var value = parseFloat(temp) * available;
            var valueAmount = value / orderPrice;
            if (!hasAvailable){
                notifToast('error',null,'لطفا ابتدا یک صرافی انتخاب کنید !');
                sliderInput.value = 0;
                $('#select2Exchange').focus();
            }else{
                var amount2 = document.getElementById("amount2");
                amount2.value = percentage;
                console.log("percentage: "+ percentage);
                var setmax = 0;
                if(maxim == 0 && setmax == 0){
                    console.log("a");
                    // کل پول ما
                    maxim =Number(document.querySelector(".me-2.quoteAvailable").innerText);
                    setmax = 1;
                    // قیمت ارز به پول مرجع
                    var theprive = Number(price.value);
                    mineSlidermax = maxim/theprive;
                    var strmineSlidermax = String(mineSlidermax);
                    console.log(strmineSlidermax);
                    console.log("strmineSlidermax.indexOf(.)"+ strmineSlidermax.indexOf("."));
                    if(strmineSlidermax.indexOf(".") != -1){
                        var four = strmineSlidermax.indexOf(".") + 7;
                        console.log("four "+ strmineSlidermax.substring(0,four));
                        mineSlidermax=parseFloat(strmineSlidermax.substring(0,four));
                    }

                    var thedes = parseInt(String(mineSlidermax).length);
                    console.log("mineSlidermax: " + mineSlidermax);
                    console.log("thedes: " + thedes);
                    changeAmountLimit.noUiSlider.updateOptions({
                        range: {
                            'min': 0,
                            'max': mineSlidermax,
                        },
                            format: wNumb({
                            decimals: 7,
                            thousand: ',',
                            suffix: ''
                        }),
                    });
                }
                var theval = Number(price.value)*parseFloat(percentage);
                var thevalEl = document.getElementById("values");
                console.log(thevalEl);
                thevalEl.value = theval;
                
                if(parseFloat(value) < minValue) {
                    notifToast('error',null,' حداقل ارزش سفارش شما باید '+ minValue +'باشد ! ');
                }else{
                    if((maxValue != null || maxValue != '')){
                        $('#value').val(parseFloat(value));
                        $('#amount').val(parseFloat(valueAmount).toFixed(digits));
                        // sliderPercentageBuyLimit();
                    }else {
                        if (parseFloat(value) > maxValue) {
                            notifToast('error',null,'حداکثر ارزش سفارش شما باید ' + maxValue + 'باشد !');
                        } else {
                            if(!isNaN(orderPrice) && orderPrice > 0){
                                $('#value').val(parseFloat(value));
                                $('#amount').val(parseFloat(valueAmount).toFixed(digits));
                            }else{
                                notifToast('error',null,'لطفا قیمت سفارش را وارد کنید !');
                                $('#price').val(0);
                            }
                        }
                    }
                }
            }
           


        }
    });



    //****************************************************************** PAIR ******************************************************************//

    //****************************************************************** TRANSFER ******************************************************************//
    $('.transferAsset').click(function(){
        var id = $(this).attr('id');
        $('#transferAsset .selectTransfer .listOfWallet .walletItem').attr('data-get',id);
        var data = balance('from','spot',id);
        $('#transferAsset .inputPlace #amount').val('');
        $('.selectWallet[data-side=to] .market').attr('market','swap');
        $('.selectWallet[data-side=from] .market').attr('market','spot');
        $('.submitTransfer').attr('data-transfer',id);
        $('.selectWallet .asset').html('-');
        $('.selectWallet .asset').attr('asset',0);
        $('#transferAsset .inputPlace #2fa').val('');
    });
    @if($user->tradePass != '')
    $('.submitTransfer').click(function(){
        var id = $(this).attr('data-transfer');
        var amount = $('#transferAsset .inputPlace #amount').val();
        var from = $('.selectWallet[data-side=from] .market').attr('market');
        var to = $('.selectWallet[data-side=to] .market').attr('market');
        var gauth = $('#transferAsset .inputPlace #2fa').val();
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        formData.append('id', id);
        formData.append('amount', amount);
        formData.append('from', from);
        formData.append('to', to);
        formData.append('gauth', gauth);
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_transferAsset_dashboard') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    notifToast('success',null,resultData.message);
                    $('#transferAsset').modal('hide');
                }else{
                    notifToast('error',null,resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    notifToast('error',null,value);
                });
            }
        });
    });
    @endif
    $('.selectTransfer .selectWallet').click(function(e){
        var side = $(this).attr('data-side');
        $('.selectTransfer .listOfWallet[data-side='+ side +']').fadeToggle();
        e.stopPropagation();
    });
    $('.inputPlace input').focus(function(event){
        $(this).parent().css('border-color','#ffffff');
    });
    $('.inputPlace input').focusout(function(event){
        $('.inputPlace').css('border-color','#ffffff38');
    });
    function balance(side,market,id){
        $('.selectWallet .asset').html('-');
        $('.selectWallet .asset').attr('asset',0);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        formData.append('id', id);
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_getAsset_dashboard') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    if(side == "to"){
                        if(market == "spot"){
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').html(parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').attr('asset',parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side=from] label').find('.asset').html(parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side=from] label').find('.asset').attr('asset',parseFloat(resultData.data.perp).toFixed(2));
                        }else{
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').html(parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').attr('asset',parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side=from] label').find('.asset').html(parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side=from] label').find('.asset').attr('asset',parseFloat(resultData.data.spot).toFixed(2));
                        }
                    }else{
                        if(market == "spot"){
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').html(parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').attr('asset',parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side=to] label').find('.asset').html(parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side=to] label').find('.asset').attr('asset',parseFloat(resultData.data.perp).toFixed(2));
                        }else{
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').html(parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side='+ side +'] label').find('.asset').attr('asset',parseFloat(resultData.data.perp).toFixed(2));
                            $('.selectTransfer[data-side=to] label').find('.asset').html(parseFloat(resultData.data.spot).toFixed(2));
                            $('.selectTransfer[data-side=to] label').find('.asset').attr('asset',parseFloat(resultData.data.spot).toFixed(2));
                        }
                    }
                }else{
                    notifToast('error',null,value);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    notifToast('error',null,value);
                });
            }
        });
    }
    $('.listOfWallet .walletItem').click(function(){
        var side = $(this).attr('data-side');
        var choose = $(this).attr('value');
        var id = $(this).attr('data-get');
        var data = balance(side,choose,id);
        if(choose == 'spot'){
            if(side == 'to'){
                $('.selectWallet[data-side='+ side +'] .market').html('بازار یک طرفه');
                $('.selectWallet[data-side='+ side +'] .market').attr('market','spot');
                $('.selectWallet[data-side=from] .market').html('بازار دوطرفه');
                $('.selectWallet[data-side=from] .market').attr('market','swap');
            }else{
                $('.selectWallet[data-side='+ side +'] .market').html('بازار یک طرفه');
                $('.selectWallet[data-side='+ side +'] .market').attr('side','spot');
                $('.selectWallet[data-side=to] .market').html('بازار دوطرفه');
                $('.selectWallet[data-side=to] .market').attr('side','swap');
            }
        }else{
            if(side == 'to'){
                $('.selectWallet[data-side='+ side +'] .market').html('بازار دوطرفه');
                $('.selectWallet[data-side='+ side +'] .market').attr('side','swap');
                $('.selectWallet[data-side=from] .market').html('بازار یک طرفه');
                $('.selectWallet[data-side=from] .market').attr('side','spot');
            }else{
                $('.selectWallet[data-side='+ side +'] .market').html('بازار دوطرفه');
                $('.selectWallet[data-side='+ side +'] .market').attr('side','swap');
                $('.selectWallet[data-side=to] .market').html('بازار یک طرفه');
                $('.selectWallet[data-side=to] .market').attr('side','spot');
            }
        }
    });
    $('.selectTransfer[data-side=from] label .asset[data-side=from]').click(function(){
        var amount = $(this).attr('asset');
        $('.inputPlace #amount').val(amount);
    });
    //****************************************************************** TRANSFER ******************************************************************//

    //****************************************************************** PAGE ******************************************************************//
    $(document).click(function(){
        $('.inputPlace .listOfCoin').fadeOut();
        $('.selectTransfer .listOfWallet').fadeOut();
    });
    $('.listOfCoin .coinItem').click(function(){
        var coin = $(this).attr('data-coin');
        $('#selectCoinForTrade').html(coin);
    });
    $('.inputPlace .selectCoin').click(function(e){
        $('.inputPlace .listOfCoin').fadeToggle();
        e.stopPropagation();
    });
    $(".buy").click(function(){
        $(this).addClass('active');
        $(".sell").removeClass('active');
        $(this).removeClass('sellClick');
        $(".sell").removeClass('buyClick');
        $('.buttonPlace').html('<button type="button" class="btn btn-custom-success btn-block w-100"> خرید <span class="ms-2 baseName"> '+ base +' </span></button>');
    });
    $(".sell").click(function(){
        $(this).addClass('active');
        $(".buy").removeClass('active');
        $(this).addClass('buyClick');
        $(".buy").addClass('sellClick');
        $('.buttonPlace').html('<button type="button" class="btn btn-custom-danger btn-block w-100"> فروش <span class="ms-2 baseName"> '+ base +' </span></button>');
    });
    //****************************************************************** PAGE ******************************************************************//

    //****************************************************************** ORDERBOOK ******************************************************************//
    $('#order_book').click(function(){
        if(!$(this).hasClass('active')){
            $('.order_book_show').show();
            $('.buy_order_show').hide();
            $('.sell_order_show').hide();
            $('#buy_order').removeClass('active');
            $('#sell_order').removeClass('active');
            $(this).addClass('active');
        }
    });
    $('#buy_order').click(function(){
        if(!$(this).hasClass('active')){
            $('.order_book_show').hide();
            $('.buy_order_show').show();
            $('.sell_order_show').hide();
            $('#order_book').removeClass('active');
            $('#sell_order').removeClass('active');
            $(this).addClass('active');
        }
    });
    $('#sell_order').click(function(){
        if(!$(this).hasClass('active')){
            $('.order_book_show').hide();
            $('.buy_order_show').hide();
            $('.sell_order_show').show();
            $('#order_book').removeClass('active');
            $('#buy_order').removeClass('active');
            $(this).addClass('active');
        }
    });
    //****************************************************************** ORDERBOOK ******************************************************************//
</script>
<script>

    //change slider range and change percentage for value
    //change slider range and change percentage for value

    //submit limit order spot
    $('#submitBuyLimit').click(function (){
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        var pair = $('select[id=kt_select2_1_pairs]').find(":selected").val();
        var connection = $('select[name=connectionName]').val();
        formData.append('connection', $('select[name=connectionName]').val());
        formData.append('symbol', $('select[id=kt_select2_1_pairs]').find(":selected").text());
        formData.append('orderPrice', $('#orderPriceLimitBuy').val());
        formData.append('orderQty', $('#orderAmountLimitBuy').val());
        $('select[name=pairs]').html('');
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_spot_buy_orderLimit') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    toastr.success(resultData.message);
                    var html2 = '';
                    var j = 1;
                    $.each(resultData.orders , function (index , value){
                        html2 = html2 + '<tr class="kt-datatable__row kt-datatable__row--even"><td class="kt-datatable__cell pr-3 text-center pt-3">'+ Enum_To_Pnum(j) +'</td><td class="kt-datatable__cell pt-3">'+ value.symbol +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.side +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.origQty +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.price +'</td><td class="kt-datatable__cell text-center"><a title="Delete Order" id="' + value.orderId + '" class="btn btn-sm btn-clean btn-icon btn-icon-md deleteOrder"> <i class="la la-trash"></i></a></td></tr>';
                        j += 1;
                    });
                    $('#ordersTable').html(html2);
// getAsetPair(pair,connection);
                }else{
                    toastr.error(resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    toastr.error(value);
                });
            }
        });
    });
    //submit limit order spot

    //submit market order spot
    $('#submitBuyMarket').click(function(){
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        var pair = $('select[id=kt_select2_1_pairs]').find(":selected").val();
        var connection = $('select[name=connectionName]').val();
        formData.append('connection', $('select[name=connectionName]').val());
        formData.append('symbol', $('select[id=kt_select2_1_pairs]').find(":selected").text());
        formData.append('amount', $('#orderValueMarketBuy').val());
        $('select[name=pairs]').html('');
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_spot_buy_orderMarket') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    toastr.success(resultData.message);
                    getAsetPair(pair,connection);
                }else{
                    toastr.error(resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    toastr.error(value);
                });
            }
        });
    });
    //submit market order spot

    //delete limit orders
    $('#ordersTable').on('click','.deleteOrder',function(){
        var id = $(this).attr('id');
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var formData = new FormData();
        var pair = $('select[id=kt_select2_1_pairs]').find(":selected").val();
        var connection = $('select[name=connectionName]').val();
        formData.append('connection', $('select[name=connectionName]').val());
        formData.append('orderid',id);
        $('select[name=pairs]').html('');
        $.ajax({
            type: 'POST',
            url: "{{ route('panel_spot_buy_orderLimit_delete') }}",
            data: formData,
            dataType: "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(resultData){
                if(resultData.status){
                    toastr.success(resultData.message);
                    var html2 = '';
                    var j = 1;
                    $.each(resultData.orders , function (index , value){
                        html2 = html2 + '<tr class="kt-datatable__row kt-datatable__row--even"><td class="kt-datatable__cell pr-3 text-center pt-3">'+ Enum_To_Pnum(j) +'</td><td class="kt-datatable__cell pt-3">'+ value.symbol +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.side +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.origQty +'</td><td class="kt-datatable__cell pt-3 text-center">'+ value.price +'</td><td class="kt-datatable__cell text-center"><a title="Delete Order" id="' + value.orderId + '" class="btn btn-sm btn-clean btn-icon btn-icon-md deleteOrder"> <i class="la la-trash"></i></a></td></tr>';
                        j += 1;
                    });
                    $('#ordersTable').html(html2);
                    // getAsetPair(pair,connection);
                }else{
                    toastr.error(resultData.message);
                }
            },error: function(jqXHR, textStatus, errorThrown) {
                $.each(JSON.parse(jqXHR.responseText).errors, function( index, value ) {
                    toastr.error(value);
                });
            }
        });
    });
    //delete limit orders

    //order value market orders buy
    $('#orderValueMarketBuy').on('keyup',function(){
        var orderValue = parseFloat($(this).val());
        var minValue = parseFloat($(this).attr('mintradeamount'));
        var maxValue = parseFloat($(this).attr('maxtradeamount'));
        var hasAvailable = $('select[name=connectionName]').val();
        var available = parseFloat($('#quoteAvailable').val());
        if (!hasAvailable){
            toastr.error('لطفا ابتدا یک صرافی انتخاب کنید !');
        }else{
            if(parseFloat(orderValue) < minValue) {
                toastr.error(' حداقل ارزش معامله شما باید '+ minValue +'باشد ! ');
            }else{
                if((maxValue != null || maxValue != '')){
                    sliderPercentageBuyMarket();
                }else {
                    if(parseFloat(orderValue) > maxValue){
                        toastr.error('حداکثر ارزش معامله شما باید '+ maxValue +'باشد !');
                    }else{
                        if(parseFloat(orderValue) > available){
                            toastr.error(' ارزش معامله شما باید کمتر از '+ available +'باشد !');
                        }else{
                            sliderPercentageBuyMarket();
                        }
                    }
                }
            }
        }
    });
    //order value market orders buy

    // $('.percentageOfValueMarketBuy').ionRangeSlider({
    //     type: "single",
    //     min: 0,
    //     max: 100,
    //     from: 0,
    //     grid: true,
    //     onChange: function (data) {
    //         var orderValue = parseFloat($('#orderValueMarketBuy').val());
    //         var minValue = parseFloat($('#orderValueMarketBuy').attr('mintradeamount'));
    //         var maxValue = parseFloat($('#orderValueMarketBuy').attr('maxtradeamount'));
    //         var hasAvailable = $('select[name=connectionName]').val();
    //         var available = parseFloat($('#quoteAvailable').val());
    //         var value = data.from;
    //         if (!hasAvailable){
    //             toastr.error('لطفا ابتدا یک صرافی انتخاب کنید !');
    //         }else{
    //             if(parseFloat(orderValue) < minValue) {
    //                 toastr.error(' حداقل ارزش معامله شما باید '+ minValue +'باشد ! ');
    //             }else{
    //                 if((maxValue != null || maxValue != '')){
    //                     $('#orderValueMarketBuy').val(parseFloat(value));
    //                 }else {
    //                     if (parseFloat(value) > maxValue) {
    //                         toastr.error('حداکثر ارزش معامله شما باید ' + maxValue + 'باشد !');
    //                     } else {
    //                         if(!isNaN(orderPrice) && orderPrice > 0){
    //                             $('#orderValueLimitBuy').val(parseFloat(value));
    //                             $('#orderAmountLimitBuy').val(parseFloat(valueAmount).toFixed(digits));
    //                         }else{
    //                             toastr.error('لطفا قیمت سفارش را وارد کنید !');
    //                             $('#orderPriceLimitBuy').val(0);
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //     }
    // });
</script>
@include('App.Content.panelFooter')
