<?php $__env->startSection('content'); ?>
    <div class="contacts-map">
        <div class="st-margin-full content-max-full-width content-wrap">
            <div class="map-wrap">
                <div id="contacts_map"></div>
            </div>
            <script>
                var map;
                function initMap(){
                    map = new google.maps.Map(document.getElementById("contacts_map"), {
                        mapId: "ae04b67ac6fe3fbb",
                    });

                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        let marker<?php echo e($loop->index); ?> = new google.maps.Marker({
                            position: {lat: <?php echo e($loc['latitude']); ?>, lng: <?php echo e($loc['longitude']); ?>},
                            icon: "<?php echo e($marker_icon['url']); ?>",
                        });
                        marker<?php echo e($loop->index); ?>.setMap(map);
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    var bounds = new google.maps.LatLngBounds(new google.maps.LatLng({lat: 51.173584, lng: 24.407839}),
                        new google.maps.LatLng({lat: 47.518416, lng: 37.031130}));
                    map.fitBounds(bounds);
                }
            </script>
            <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIQEPwnGbYdqVcugonBbGeWs-fwFzRh1c&libraries=places&callback=initMap"></script>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/contacts_map.blade.php ENDPATH**/ ?>