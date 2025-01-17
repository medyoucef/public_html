
   <?php $__env->startSection('content'); ?> 

  <main><main>
    <section class="mt-5 py-3">
    </section>
    <section class="container-fluid mt-3">
        <div class="d-flex align-items-center justify-content-center">
            <h6 class="text-start text-secondary">
                مراجعة الطلب
            </h6>
            <h6 class="text-start text-secondary mx-2">
                .......
            </h6>
            <h6 class="text-start text-secondary">
                عنوان
            </h6>
            <h6 class="text-start text-secondary mx-2">
                .......
            </h6>
            <h6 class="text-start text-secondary">
                الدفع
            </h6>
        </div>
        <div class="">

        <div class="row my-2">
                            <!-- itmes -->
             <div class="col-md-8 my-2">  
                                          <?php 

   $main_price=0;
            $total=0;
            $count=0;
             
                             if(session('cart'))
                             {
                                   foreach(session('cart') as $id => $details)
                                   {
                                $total += $details['price'] * $details['quantity']; 
                               
                               $quantity=$details['quantity'];
                               

          

?>
<div class="container rounded border bg-white shadow" style="margin-bottom: 20px;">
                                    <div class="row align-items-center py-2">
                                        <div class="col-2">
                                            <div class="rounded shadow">
                                                <img class="ms-auto me-auto d-md-block d-none w-100" src="<?php echo e(asset('assets/images/'.$details['image'])); ?>" alt="<?php echo e($details['name']); ?> ">
                                                <div class="row">
                                                    <img class="ms-auto me-auto d-md-none w-100" src="<?php echo e(asset('assets/images/'.$details['image'])); ?>"  alt="<?php echo e($details['name']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 mt-md-0 mt-3 px-0 mx-0">
                                            <a  href="<?php echo e(route('front.product',$details['slug'])); ?>"  class="px-2 text-decoration-none h6 d-block text-dark text-center">
                                                     <?php echo e($details['name']); ?>

                                                        </a>
                                        </div>
                                        <div class="col-4 my-3 px-0">
                                                      <div class="col-6" data-id="<?php echo e($id); ?>"  >
                                                <select  name="Quantity" class="form-control   qunatity" id="qunatity">
                                                <option <?php if($quantity==0): ?> selected <?php endif; ?>   value="0" >0</option>
                                                <option <?php if($quantity==1): ?> selected <?php endif; ?>   value="1" >1</option>
                                                <option <?php if($quantity==2): ?> selected <?php endif; ?>  value="2" >2</option>
                                                <option <?php if($quantity==3): ?> selected <?php endif; ?>  value="3" >3</option>
                                                <option  <?php if($quantity==4): ?> selected <?php endif; ?>  value="4">4</option>
                                                <option <?php if($quantity==5): ?> selected <?php endif; ?>  value="5">5</option>
                                               <option  <?php if($quantity==6): ?> selected <?php endif; ?>  value="6">6</option>
                                                </select>                                                    </div>
                                                    <!--<div class="col-6 text-end fs-6 text-warning">-->
                                                    <!--    <?php echo e($details['price']); ?> ر.س                                                -->
                                                    <!--</div>-->
                                          </div>
                                        <div class="col-2 mt-md-0 my-2">
                                              <form action="remove_cart" method="get">
                                                <input type="hidden" name="id" value="<?php echo e($id); ?>" >
                                                <div>
                                                    <button name="deleteItem" class="btn btn-outline-secondary w-100" style="height: 35px;"><i class="fas fa-trash-can"></i></button>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                                </div>                                                             
                                                            
                             <?php
}}                                ?>
                                    
                                                                    </div>

                          <div class="col-md-4 text-secondary">
                                <div class="container rounded bg-white shadow border my-2 px-3 py-2">
                                    <h5 class="border-bottom py-3 mb-3 fw-normal">تفاصيل الفاتورة</h5>
                                    <div class="row my-2">
                                        <div class="col-6">قيمة المنتجات :</div>
                                        <div class="col-6 text-end"><?php echo e($total); ?> ر.س</div>
                                    </div>
                               
                                    <div class="row my-2 border-top pt-2 text-dark fw-semibold">
                                        <div class="col-6">المجموع الكلي :</div>
                                        <div class="col-6 text-end text-success"><?php echo e($total); ?> ر.س</div>
                                    </div>
                                    <div class="row mt-5 mb-3">
                                        <div class="col-12">
                                            <a href="checkout" class="btn w-100 btn-outline-dark">
                                                <i class="fas fa-angle-right fa-fw"></i>
متابعة عملية الشراء                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </section>

    <a href="https://wa.me/+966502254940" class="contact py-2 px-3 bg-success rounded-circle">
    <i class="fab fa-whatsapp text-white my-1 fa-2x"></i>
</a>
</main>
        









  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ksapixeil/public_html/core/resources/views/front/catalog/cart.blade.php ENDPATH**/ ?>