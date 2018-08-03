@extends('layouts.recruter')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        <form id="datatable" class="table table-striped table-bordered"  method="POST" action="{{ route('import_process') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                            <table class="table">
                                @if (isset($csv_header_fields))
                                <tr>
                                    @foreach ($csv_header_fields as $csv_header_field)
                                        <th>{{ $csv_header_field }}</th>
                                    @endforeach
                                </tr>
                                @endif
                                @foreach ($csv_data as $row)
                                    <tr>
                                    @foreach ($row as $key => $value)
                                        <td>{{ $value }}</td>
                                    @endforeach
                                    </tr>
                                @endforeach
                                <tr>
                                    @foreach ($csv_data[0] as $key => $value)
                                        <td>
                                            <select name="fields[{{ $key }}]">
                                                @foreach (config('app.db_fields') as $db_field)
                                                    <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                        @if ($key === $db_field) selected @endif>{{ $db_field }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary">
                                My candidate
                            </button>
                            <button type="submit" class="btn btn-danger">
                                reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>


            {{--<div class="col-lg-5">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Receipt</div>--}}
                {{--<div class="card2">--}}

                    {{--<table class="table table-hover">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Product</th>--}}
                            {{--<th class="text-center">candidates</th>--}}
                            {{--<th class="text-center">Price</th>--}}
                            {{--<th class="text-center">Total</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td class="col-md-9"><h4>GAZELLE-PROXY</h4></td>--}}
                            {{--@foreach ($csv_data as $row)--}}
                            {{--<td class="col-md-1 text-center" style="text-align: center"> {{  $loop->count }} </td>--}}
                            {{--@endforeach--}}

                            {{--<td class="col-md-1 text-center">$20</td>--}}
                            {{--<td class="col-md-1 text-center">$400</td>--}}
                        {{--</tr>--}}


                        {{--<tr>--}}
                            {{--<td class="text-right"><h4><strong>Total: </strong></h4></td>--}}
                            {{--<td class="text-center text-danger"><h4><strong>$400</strong></h4></td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    </div>
@endsection
