@extends('layouts.master')

@section('title', 'History')

@section('main')

@include('components.navbar')

<main>
    <div class="accordion" id="accordion">
        @php
            $count = 1;
        @endphp

        @foreach ($transactions as $transaction)

        <div class="accordion-item my-3">
            <h2 class="accordion-header" id="heading{{$count}}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $count }}">
                    Transaction Date {{ $transaction->transaction_date }}
                </button>
            </h2>
            <div id="collapse{{ $count }}" class="accordion-collapse collapse show" aria-labelledby="heading{{$count}}" data-bs-parent="#accordion">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Sub price</th>
                            </tr>
                        </thead>

                        @php
                        $total = 0;
                        $quantity = 0;
                        @endphp

                        <tbody>
                        @foreach ($transaction->transactionDetail as $transactionDetail)
                            @php
                                $subPrice = $transactionDetail->product->product_price * $transactionDetail->quantity;
                                $quantity += $transactionDetail->quantity;
                                $total += $subPrice;
                            @endphp

                            <tr>
                                <td>{{ $transactionDetail->product->product_name }}</td>
                                <td>{{ $transactionDetail->quantity }}</td>
                                <td>IDR {{ $subPrice }}</td>
                            </tr>

                        @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <td><strong>Total</strong></td>
                                <td><strong>{{ $quantity }} item(s)</strong></td>
                                <td><strong>IDR {{ $total }}</strong></td>
                            </tr>
                        </tfoot>


                    </table>

                </div>
            </div>
        </div>

        @php
            $count++;
        @endphp

        @endforeach
    </div>

</main>
@endsection
