<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr id="order-bulk-delete">
  <td><input type="checkbox" class="bulk-item" value="<?php echo e($data->id); ?>"></td>
   <td>
        <?php echo e($data->name); ?>

    </td>
    <td>
   <a href="https://api.whatsapp.com/send?phone=966<?php echo e($data->whatsApp); ?>">    <?php echo e($data->whatsApp); ?></a> 
    </td>
 

    <td>
          <?php echo e($data->total); ?>ر.س

    </td>

    <td>
                 <?php echo e(($data->FirstPayment)); ?>ر.س

    </td>
        <td>
                 <?php echo e(($data->MonthlyPayment)); ?>ر.س

    </td>
      <td>
                 <?php echo e(($data->InstallmentBy)); ?> شهور

    </td>
    <td>
        <?
        if($data->TransferFile!=null)
        {
        ?>
        <a href="https://ihtemamcommunication.store/files/<? echo $data->TransferFile?>" class="text-danger" download> Download </a>
        <?
        }
        ?>
    </td>
        <td>
          <?
        if($data->TransferFile!=null)
  {
        ?>
        <a href="https://ihtemamcommunication.store/files/<? echo $data->DiscountBillFile?>" class="text-danger" download> Download </a>
           <?
        }
        ?>
    </td>
    <td>
       
              <?php echo e(__($data->order_status)); ?>

          
    </td>
    <td>
        <div class="action-list">
<!--            <a class="btn btn-secondary btn-sm"-->
<!--                href="<?php echo e(route('back.order.invoice',$data->id)); ?>">-->
<!--مشاهدة             </a>-->
            
                    <a class="btn btn-primary btn-sm" href="https://ihtemamcommunication.store/order/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>  طباعة </a>
                <?
                if($data->MonthlyPayment!=0)
                {
                    ?>
                  
                                      <a class="btn btn-danger btn-sm" href="https://ihtemamcommunication.store/contract-of-sale/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>عقد تقسيط</a>
  
              <?
              }
                ?>
             
            <!--<a class="btn btn-danger btn-sm " data-toggle="modal"-->
            <!--    data-target="#confirm-delete" href="javascript:;"-->
            <!--    data-href="<?php echo e(route('back.order.delete',$data->id)); ?>">-->
            <!--    <i class="fas fa-trash-alt"></i>-->
            <!--</a>-->
            
            
        </div>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u135631004/domains/ksa-pixeil.com/public_html/core/resources/views/back/order/table.blade.php ENDPATH**/ ?>