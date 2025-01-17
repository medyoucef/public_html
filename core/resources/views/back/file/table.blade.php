@foreach($datas as $data)
<tr>
    <td>
        <img src="{{ $data->photo ? asset('assets/images/'.$data->logo) : asset('assets/images/placeholder.png') }}" alt="Image Not Found">
    </td>

    <td>

       {{ $data->title }}

        --

    </td>
    <!--<td>-->
    <!--   {{strtoupper($data->home_page)}}-->
    <!--</td>-->

    <!--<td>-->
    <!--   @if ($data->home_page != 'theme4')-->
    <!--   {{ strlen(strip_tags($data->details)) > 250 ? substr(strip_tags($data->details),0,250).'...' : strip_tags($data->details) }}-->
    <!--    @else-->
    <!--    ---->
    <!--   @endif-->
    <!--</td>-->

    <td>
        <div class="action-list">
            <!--<a class="btn btn-secondary btn-sm "-->
            <!--    href="{{ route('back.file.edit',$data->id) }}">-->
            <!--    <i class="fas fa-edit"></i>-->
            <!--</a>-->
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.file.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach
