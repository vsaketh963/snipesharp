@extends('emails/layouts/default')

@section('content')

    <p>{{ trans_choice('mail.There_are',$count) }} {{ $count }} {{ trans_choice('mail.items_below_minimum',$count) }}</p>

    <table style="border: 1px solid black; padding: 5px;" width="100%" cellspacing="0" cellpadding="3">
        <tr>
            <td><strong>{{ trans('mail.name') }}</strong></td>
            <td><strong>{{ trans('mail.type') }}</strong></td>
            <td><strong>{{ trans('mail.current_QTY') }}</strong></td>
            <td><strong>{{ trans('mail.min_QTY') }}</strong></td>
            <td><strong>Normal Re Order Amount</strong></td>
        </tr>

        @for($i=0; $count > $i; $i++)
            <tr>
                <td>
                    <a href="{{ route($data[$i]['type'].'.show', $data[$i]['id']) }}">{{ $data[$i]['name'] }}</a>
                </td>
                <td>{{ $data[$i]['type'] }}</td>
                <td>{{ $data[$i]['remaining'] }}</td>
                <td>{{ $data[$i]['min_amt'] }}</td>
                <td>{{ $data[$i]['normal_amt'] }}</td>
            </tr>

        @endfor


    </table>

    @if ($snipeSettings->show_url_in_emails=='1')
        <p><a href="{{ url('/') }}">{{ $snipeSettings->site_name }}</a></p>
    @else
        <p>{{ $snipeSettings->site_name }}</p>
    @endif

@stop
