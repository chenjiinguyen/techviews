<?php $__env->startSection('pageTitle', $pageTitle); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt--7">
        <div class="row mt-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="input-group mb-12">
                      <input id="search_input" class="form-control" placeholder="Tìm kiếm bài viết..." type="text">
                      <div class="input-group-prepend">
                        <button id="search" class="input-group-text"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                    <div class="table-responsive">
                        <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">
                                        Tiêu Đề
                                    </th>
                                    <th scope="col">
                                        Lượt Xem
                                    </th>
                                    <th scope="col">
                                        Bài Viết Gốc
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">


                            </tbody>
                        </table>
                    </div>

                    </div>

            </div>
      </div>

        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo e(asset('argon')); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $("#search").click(function () {
            let keyword = $("#search_input").val();
            if(keyword.length > 0){
                $.ajax({
                    type: "get",
                    url: "<?php echo e(url("/api/search/")); ?>/"+keyword,
                    dataType: "json",
                    success: function (json_data) {
                        let datahtml;
                        z=0;
                        for (let i = 0; i < json_data.length; i++) {
                            if(z==10)break;
                            let x = `<tr>
                                        <th scope="row" class="name">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="https://graph.facebook.com/v3.0/${ json_data[i].id_author}/picture?width=48">
                                                </a>
                                                <div class="media-body">
                                                    <a href="/post/${ json_data[i].id }" class="mb-0 text-sm">${ json_data[i].title }</a>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            ${ json_data[i].views }
                                        </td>
                                        <td class="status">
                                            <a href="${ (!json_data[i].id_post)?"#":"https://fb.com/>"+json_data[i].id }" class="btn btn-info">
                                            <i class="fab fa-facebook-f"></i> Xem Bài Viết Gốc
                                            </a>
                                        </td>
                                    </tr>`;

                            datahtml += x;
                            z++;
                        };
                        $("tbody.list").html(datahtml);
                    }

                });
            };
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/chenjinguyen/Websever/techviews/resources/views/search.blade.php ENDPATH**/ ?>