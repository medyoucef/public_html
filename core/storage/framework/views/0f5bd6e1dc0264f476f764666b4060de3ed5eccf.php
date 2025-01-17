<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b><?php echo e(__('Create Banner')); ?></b> </h3>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('back.banner.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">

						</div>
					</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__('Home 1')); ?></a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><?php echo e(__('Home 2')); ?></a>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                <!--  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo e(__('Home 3')); ?></a>-->
                                <!--</li>-->
                                <!--<li class="nav-item">-->
                                <!--  <a class="nav-link" id="pills-home4-tab" data-toggle="pill" href="#pills-home4" role="tab" aria-controls="pills-home4" aria-selected="false"><?php echo e(__('Home 4')); ?></a>-->
                                <!--</li>-->
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form  action="<?php echo e(route('back.banner.store')); ?>" method="POST"
                                        enctype="multipart/form-data">

                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="home_page" value="theme1" id="">
                                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group" style="display:none">
                                            <label id="change_label" for="name"><?php echo e(__('Brand Logo')); ?> </label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found"  value="0">
                                            <br>
                                            <span id="change_message" class="mt-1"><?php echo e(__('Image Size Should Be 130 x 40')); ?></span>
                                        </div>

                                        <div class="form-group position-relative" style="display:none">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group" style="display:none">
                                            <label for="title"><?php echo e(__('Title')); ?> *</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="<?php echo e(__('Enter Title')); ?>" value="0" >
                                        </div>

                                        <div class="form-group" style="display:none">
                                            <label for="banner-link"><?php echo e(__('Link')); ?> *</label>
                                            <input type="text" name="link" class="form-control" id="banner-link"
                                                placeholder="<?php echo e(__('Enter Link')); ?>" value="0" >
                                        </div>

                                        <div class="form-group" style="display:none">
                                            <label for="details"><?php echo e(__('Details')); ?> *</label>
                                            <textarea name="details" id="details" class="form-control" rows="5"
                                                placeholder="<?php echo e(__('Enter Details')); ?>"
                                                >o</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label id="banner_text"  for="name"><?php echo e(__('Set banner Image')); ?> *</label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                            <br>
                                            <span id="chenge_label2" class="mt-1"><?php echo e(__('Image Size Should Be 968 x 530 ')); ?></span>
                                        </div>

                                        <div class="form-group position-relative ">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form  action="<?php echo e(route('back.banner.store')); ?>" method="POST"
                                        enctype="multipart/form-data">

                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="home_page" value="theme2" id="">
                                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label id="change_label" for="name"><?php echo e(__('Brand Logo')); ?> </label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                            <br>
                                            <span id="change_message" class="mt-1"><?php echo e(__('Image Size Should Be 130 x 40')); ?></span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title"><?php echo e(__('Title')); ?> *</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label for="banner-link"><?php echo e(__('Link')); ?> *</label>
                                            <input type="text" name="link" class="form-control" id="banner-link"
                                                placeholder="<?php echo e(__('Enter Link')); ?>" value="<?php echo e(old('link')); ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label for="details"><?php echo e(__('Details')); ?> *</label>
                                            <textarea name="details" id="details" class="form-control" rows="5"
                                                placeholder="<?php echo e(__('Enter Details')); ?>"
                                                ></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label id="banner_text"  for="name"><?php echo e(__('Set banner Image')); ?> *</label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                            <br>
                                            <span id="chenge_label2" class="mt-1"><?php echo e(__('Image Size Should Be 1296 x 530 ')); ?></span>
                                        </div>

                                        <div class="form-group position-relative ">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <form  action="<?php echo e(route('back.banner.store')); ?>" method="POST"
                                        enctype="multipart/form-data">

                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="home_page" value="theme3" id="">
                                        <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label id="change_label" for="name"><?php echo e(__('Feature Image')); ?> </label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                            <br>
                                            <span id="change_message" class="mt-1"><?php echo e(__('Image Size Should Be 320 x 320')); ?></span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title"><?php echo e(__('Title')); ?> *</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label for="banner-link"><?php echo e(__('Link')); ?> *</label>
                                            <input type="text" name="link" class="form-control" id="banner-link"
                                                placeholder="<?php echo e(__('Enter Link')); ?>" value="<?php echo e(old('link')); ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label for="details"><?php echo e(__('Details')); ?> *</label>
                                            <textarea name="details" id="details" class="form-control" rows="5"
                                                placeholder="<?php echo e(__('Enter Details')); ?>"
                                                ></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label id="banner_text"  for="name"><?php echo e(__('Set Banner Image')); ?> *</label>
                                            <br>
                                                <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                    alt="No Image Found">
                                            <br>
                                            <span id="chenge_label2" class="mt-1"><?php echo e(__('Image Size Should Be 1903 x 570 ')); ?></span>
                                        </div>

                                        <div class="form-group position-relative ">
                                            <label class="file">
                                                <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
                                                    aria-label="File browser example" >
                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-home4" role="tabpanel" aria-labelledby="pills-home4-tab"><form  action="<?php echo e(route('back.banner.store')); ?>" method="POST"
                                    enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <input type="hidden" name="home_page" value="theme4" id="">
                                    <input type="hidden" name="title" class="form-control" id="title"
                                    placeholder="<?php echo e(__('Enter Title')); ?>" value="theme 4" >

                                    <div class="form-group">
                                        <label for="banner-link"><?php echo e(__('Link')); ?> *</label>
                                        <input type="text" name="link" class="form-control" id="banner-link"
                                            placeholder="<?php echo e(__('Enter Link')); ?>" value="<?php echo e(old('link')); ?>" >
                                    </div>

                                    <input name="details" type="hidden" id="details" value="theme4" class="form-control" rows="5"
                                    placeholder="<?php echo e(__('Enter Details')); ?>"
                                    >

                                    <div class="form-group">
                                        <label id="banner_text"  for="name"><?php echo e(__('Set Banner Image')); ?> *</label>
                                        <br>
                                            <img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>"
                                                alt="No Image Found">
                                        <br>
                                        <span id="chenge_label2" class="mt-1"><?php echo e(__('Image Size Should Be 1000 x 530 ')); ?></span>
                                    </div>

                                    <div class="form-group position-relative ">
                                        <label class="file">
                                            <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
                                                aria-label="File browser example" >
                                            <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                    </div>

                                </form></div>
                              </div>
                        </div>
                    </div>

			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altajksa/public_html/core/resources/views/back/banner/create.blade.php ENDPATH**/ ?>