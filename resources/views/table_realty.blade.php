@extends('master')

@php
    $title = "Результат поиска"
@endphp

@section('content')
    <div class="container">
        <table class="result-filter">
            <tr>
                <th>Улица</th>
                <th>Номер дома</th>
                <th>Район</th>
                <th>Тип</th>
                <th>Кол-во комнат</th>
                <th>Материал стен</th>
                <th>Площадь</th>
                <th>Цена</th>
            </tr>
            @foreach($realty as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->number_house }}</td>
                    <td>{{ $item->street->district->name }}</td>
                    <td>{{ $item->typeRealty->name }}</td>
                    <td>{{ $item->numbers_room }}</td>
                    <td>{{ $item->materialWall->name }}</td>
                    <td>{{ $item->area }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
