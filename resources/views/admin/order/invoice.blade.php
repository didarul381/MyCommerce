@extends('admin.master')

@section('body')
<style>
			.invoice-box {
				max-width:auto;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
<div class="row mt-3">
    <div class=" col-md-12 ">
    <div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
									<img src="https://www.sparksuite.com/images/logo.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Invoice #: {{$order->id}}<br />
									Order Date: {{$order->order_date}}<br />
									Inovoice Date: {{date('Y-m-d')}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
                                    <h4>Delivary Information</h4>
                                    <hr/>
									{{$order->customer->name}}<br />
									{{$order->customer->mobile}}<br />
                                        {{$order->delivery_address}}
								</td>

								<td>
                                <h4>Company Information</h4>
                                <hr/>
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td >Check #</td>
				</tr>

				<tr class="details">
					<td>{{$order->payment_type=='1'?'Cash in delivery':'Online'}}</td>

					<td>{{$order->order_total}}</td>
				</tr>

				<tr class="heading">
					<td>Item</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>Total</td>
					
				</tr>
                  @foreach($order->orderDetails as $orderDetail)
				<tr class="item">
					<td>{{$orderDetail->product_name}}</td>
                    <td>{{$orderDetail->product_price}}</td>
                    <td>{{$orderDetail->product_qty}}</td>
					<td>{{$orderDetail->product_price * $orderDetail->product_qty}}</td>
				</tr>

				@endforeach

				<tr class="total">
					<td></td>
					<td></td>
					


					<td style="text-align:right">Total: $385.00</td>
				</tr>
			</table>
		</div>


    </div>
</div>


@endsection