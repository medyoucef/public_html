@foreach($datas as $data)
<tr id="order-bulk-delete">
  <td><input type="checkbox" class="bulk-item" value="{{$data->id}}"></td>
   <td>
        {{$data->name}}
    </td>
    <td>
        {{$data->whatsApp}}
    </td>
 

    <td>
          {{$data->total}}ر.س

    </td>

    <td>
                 {{($data->FirstPayment) }}ر.س

    </td>
        <td>
                 {{($data->MonthlyPayment) }}ر.س

    </td>
      <td>
                 {{($data->InstallmentBy) }} شهور

    </td>
    <td>
        <a href="https://picxelstore.alfuratt-group.com/files/<? echo $data->TransferFile?>" class="text-danger" download> Download </a>
        
    </td>
        <td>
        <a href="https://picxelstore.alfuratt-group.com/files/<? echo $data->DiscountBillFile?>" class="text-danger" download> Download </a>
        
    </td>
    <td>
       
              {{ __($data->order_status) }}
          
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm"
                href="{{ route('back.order.invoice',$data->id) }}">
مشاهدة             </a>
            
                    <a class="btn btn-primary btn-sm" href="{{ route('back.order.print',$data->id) }}" target="_blank"><i class="fas fa-print"></i>  طباعة </a>
                    <a class="btn btn-primary btn-sm" href="{{ route('back.contract-of-sale.print',$data->id) }}" target="_blank"><i class="fas fa-print"></i>عقد تقسيط</a>
             
            <!--<a class="btn btn-danger btn-sm " data-toggle="modal"-->
            <!--    data-target="#confirm-delete" href="javascript:;"-->
            <!--    data-href="{{ route('back.order.delete',$data->id) }}">-->
            <!--    <i class="fas fa-trash-alt"></i>-->
            <!--</a>-->
            
            
        </div>
    </td>
</tr>
@endforeach
