<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr id="order-bulk-delete">
  <!--<td><input type="checkbox" class="bulk-item" value="<?php echo e($data->id); ?>"></td>-->
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
                 <?php echo e(($data->MonthlyPayment)); ?>


    </td>
      <td>
                 <?php echo e(($data->InstallmentBy)); ?> شهور

    </td>
    <td>
        <?
        if($data->TransferFile!=null)
        {
        ?>
        <a href="<?php echo e($setting->domain); ?>/files/<? echo $data->TransferFile?>" class="text-danger" download> Download </a>
        <?
        }
        ?>
    </td>

 
    <td>
        <div class="action-list">
<!--            <a class="btn btn-secondary btn-sm"-->
<!--                href="<?php echo e(route('back.order.invoice',$data->id)); ?>">-->
<!--مشاهدة             </a>-->
            
                    <!--<a class="btn btn-primary btn-sm" href="<?php echo e($setting->domain); ?>/order/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>  طباعة </a>-->
                    
                    
                          <!--<a class="btn btn-primary btn-sm" href="<?php echo e($setting->domain); ?>/order//<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>  حذف </a>-->
                    
              <a href="orderdelete?id=<?php echo e($data->id); ?>" class="btn  btn-danger btn-sm" onclick="return confirm('هل انت متأكد من حذف هذه الفاتورة؟')">حذف </a>
      
      
      
      
            <a class="btn btn-info btn-sm" href="<?php echo e($setting->domain); ?>/order/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>الفاتورة </a>

      
                  <a class="btn btn-success btn-sm" href="<?php echo e($setting->domain); ?>/RecepitVoucher/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>سند قبض  </a>

      
      
      
      
      
      
                <?
                if($data->InstallmentBy!=0)
                {
                    ?>
                  
                                      <a class="btn btn-warning btn-sm" href="<?php echo e($setting->domain); ?>/contract-of-sale/print/<?php echo e($data->id); ?>"  ><i class="fas fa-print"></i>عقد تقسيط</a>
  
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
<?php /**PATH /home/webok/public_html/core/resources/views/back/order/table.blade.php ENDPATH**/ ?>