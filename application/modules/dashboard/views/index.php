<div class="headerbar">
    <h1>Trang quản trị</h1>
</div>

<?php //echo $this->layout->load_view('layout/alerts'); ?>

<div class="container-fluid">

    <div class="row-fluid">

        <div class="span6">

            <div class="widget quick-actions">

                <div class="widget-title">
                    <h5>Thao tác nhanh</h5>
                </div>

                <table class="table no-margin">
                    <tbody>
                        <tr>
                            <td><a href="#modal-placeholder" data-toggle="modal" onclick="load_modal('<?php echo site_url('file/home_img_upload'); ?>');"><i class="icon-credit-card"></i>Tải ảnh lên trang chủ</a></td>
                            <td><a href="<?php echo site_url('model/create'); ?>"><i class="icon-user"></i>Thêm model mới</a></td>
                            <td><a href="<?php echo site_url('news/create'); ?>"> <i class="icon-file-text"></i>Đăng tin mới</a></td>
                            <!--<td><a href="javascript:void(0);" class="create-invoice"><i class="icon-money"></i><?php //echo lang('create_invoice');      ?></a></td>-->
                            
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="widget overview">
                <div class="widget-title">
                    <h5><i class="icon-file-text"></i>Overview</h5>
                </div>

<!--                <table class="table no-margin">-->
<!--                    <thead>-->
<!--                        <tr>-->
                <!--                            --><?php //foreach ($quote_status_totals as $total) {      ?>
                <!--                                <th><a href="--><?php //echo site_url($total['href']);      ?><!--">--><?php //echo $total['label'];      ?><!--</a></th>-->
                <!--                            --><?php //}      ?>
                <!--                        </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                        <tr>-->
                <!--                            --><?php //foreach ($quote_status_totals as $total) {      ?>
                <!--                               <td class="--><?php //echo $total['class'];      ?><!--">--><?php //echo format_currency($total['sum_total']);      ?><!--</td>-->
                <!--                            --><?php //}      ?>
                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->

            </div>

            <div class="widget overview">
                <div class="widget-title">
                    <h5><i class="icon-money"></i><?php //echo lang('invoice_overview');      ?></h5>
                </div>

<!--                <table class="table no-margin">-->
<!--                    <thead>-->
<!--                        <tr>-->
                <!--                            --><?php //foreach ($invoice_status_totals as $total) {      ?>
                <!--                                <th><a href="--><?php //echo site_url($total['href']);      ?><!--">--><?php //echo $total['label'];      ?><!--</a></th>-->
                <!--                            --><?php //}      ?>
                <!--                        </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                        <tr>-->
                <!--                            --><?php //foreach ($invoice_status_totals as $total) {      ?>
                <!--                               <td class="--><?php //echo $total['class'];      ?><!--">--><?php //echo format_currency($total['sum_total']);      ?><!--</td>-->
                <!--                            --><?php //}      ?>
                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->

            </div>

        </div>

        <div class="span6">

            <div class="widget">

                <div class="widget-title">
                    <h5><i class="icon-warning-sign"></i><?php //echo lang('overdue_invoices');      ?></h5>
                </div>

<!--                <table class="table table-striped no-margin">-->
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('status');      ?><!--</th>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('due_date');      ?><!--</th>-->
<!--                            <th style="width: 10%;">--><?php //echo lang('invoice');      ?><!--</th>-->
<!--                            <th style="width: 40%;">--><?php //echo lang('client');      ?><!--</th>-->
<!--                            <th style="text-align: right; width: 15%;">--><?php //echo lang('balance');      ?><!--</th>-->
<!--                            <th style="text-align: center; width: 5%;">--><?php //echo lang('pdf');      ?><!--</th>-->
                <!--                        </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                        --><?php //foreach ($overdue_invoices as $invoice) {      ?>
                <!--                            <tr>-->
                <!--                                <td><span class="label --><?php //echo $invoice_statuses[$invoice->invoice_status_id]['class'];      ?><!--">--><?php //echo $invoice_statuses[$invoice->invoice_status_id]['label'];      ?><!--</span></td>-->
                <!--                                <td><span class="font-overdue">--><?php //echo date_from_mysql($invoice->invoice_date_due);      ?><!--</span></td>-->
                <!--                                <td>--><?php //echo anchor('invoices/view/' . $invoice->invoice_id, $invoice->invoice_number);      ?><!--</td>-->
                <!--                                <td>--><?php //echo anchor('clients/view/' . $invoice->client_id, $invoice->client_name);      ?><!--</td>-->
                <!--                                <td style="text-align: right;">--><?php //echo format_currency($invoice->invoice_balance);      ?><!--</td>-->
                <!--                                <td style="text-align: center;"><a href="--><?php //echo site_url('invoices/generate_pdf/' . $invoice->invoice_id);      ?><!--" title="--><?php //echo lang('download_pdf');      ?><!--"><i class="icon-print"></i></a></td>-->
                <!--                            </tr>-->
                <!--                        --><?php //}      ?>
                <!--                        <tr>-->
                <!--                            <td colspan="6" style="text-align: center;">--><?php //echo anchor('invoices/status/overdue', lang('view_all'));      ?><!--</td>-->
                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->

            </div>

            <div class="widget">

                <div class="widget-title">
                    <h5><i class="icon-time"></i><?php //echo lang('recent_quotes');      ?></h5>
                </div>

<!--                <table class="table table-striped no-margin">-->
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('status');      ?><!--</th>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('date');      ?><!--</th>-->
<!--                            <th style="width: 10%;">--><?php //echo lang('quote');      ?><!--</th>-->
<!--                            <th style="width: 40%;">--><?php //echo lang('client');      ?><!--</th>-->
<!--                            <th style="text-align: right; width: 15%;">--><?php //echo lang('balance');      ?><!--</th>-->
<!--                            <th style="text-align: center; width: 5%;">--><?php //echo lang('pdf');      ?><!--</th>-->
                <!--                        </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                        --><?php //foreach ($quotes as $quote) {      ?>
                <!--                            <tr>-->
                <!--                                <td><span class="label --><?php //echo $quote_statuses[$quote->quote_status_id]['class'];      ?><!--">--><?php //echo $quote_statuses[$quote->quote_status_id]['label'];      ?><!--</span></td>-->
                <!--                                <td>--><?php //echo date_from_mysql($quote->quote_date_created);      ?><!--</td>-->
                <!--                                <td>--><?php //echo anchor('quotes/view/' . $quote->quote_id, $quote->quote_number);      ?><!--</td>-->
                <!--                                <td>--><?php //echo anchor('clients/view/' . $quote->client_id, $quote->client_name);      ?><!--</td>-->
                <!--                                <td style="text-align: right;">--><?php //echo format_currency($quote->quote_total);      ?><!--</td>-->
                <!--                                <td style="text-align: center;"><a href="--><?php //echo site_url('quotes/generate_pdf/' . $quote->quote_id);      ?><!--" title="--><?php //echo lang('download_pdf');      ?><!--"><i class="icon-print"></i></a></td>-->
                <!--                            </tr>-->
                <!--                        --><?php //}      ?>
                <!--                        <tr>-->
                <!--                            <td colspan="6" style="text-align: center;">--><?php //echo anchor('quotes/status/all', lang('view_all'));      ?><!--</td>-->
                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->

            </div>

            <div class="widget">

                <div class="widget-title">
                    <h5><i class="icon-time"></i><?php //echo lang('recent_invoices');      ?></h5>
                </div>

<!--                <table class="table table-striped no-margin">-->
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('status');      ?><!--</th>-->
<!--                            <th style="width: 15%;">--><?php //echo lang('due_date');      ?><!--</th>-->
<!--                            <th style="width: 10%;">--><?php //echo lang('invoice');      ?><!--</th>-->
<!--                            <th style="width: 40%;">--><?php //echo lang('client');      ?><!--</th>-->
<!--                            <th style="text-align: right; width: 15%;">--><?php //echo lang('balance');      ?><!--</th>-->
<!--                            <th style="text-align: center; width: 5%;">--><?php //echo lang('pdf');      ?><!--</th>-->
                <!--                        </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                        --><?php //foreach ($invoices as $invoice) {      ?>
                <!--                            <tr>-->
                <!--                                <td><span class="label --><?php //echo $invoice_statuses[$invoice->invoice_status_id]['class'];      ?><!--">--><?php //echo $invoice_statuses[$invoice->invoice_status_id]['label'];      ?><!--</span></td>-->
                <!--                                <td><span class="--><?php //if ($invoice->is_overdue) {      ?><!--font-overdue--><?php //}      ?><!--">--><?php //echo date_from_mysql($invoice->invoice_date_due);      ?><!--</span></td>-->
                <!--                                <td>--><?php //echo anchor('invoices/view/' . $invoice->invoice_id, $invoice->invoice_number);      ?><!--</td>-->
                <!--                                <td>--><?php //echo anchor('clients/view/' . $invoice->client_id, $invoice->client_name);      ?><!--</td>-->
                <!--                                <td style="text-align: right;">--><?php //echo format_currency($invoice->invoice_balance);      ?><!--</td>-->
                <!--                                <td style="text-align: center;"><a href="--><?php //echo site_url('invoices/generate_pdf/' . $invoice->invoice_id);      ?><!--" title="--><?php //echo lang('download_pdf');      ?><!--"><i class="icon-print"></i></a></td>-->
                <!--                            </tr>-->
                <!--                        --><?php //}      ?>
                <!--                        <tr>-->
                <!--                            <td colspan="6" style="text-align: center;">--><?php //echo anchor('invoices/status/all', lang('view_all'));      ?><!--</td>-->
                <!--                        </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->

            </div>

        </div>

    </div>

</div>
