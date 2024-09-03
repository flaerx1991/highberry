<div id="preload" class="on">
   <?php $preload_logo = get_field('preloader_logo', 'option');
        $preload_text = get_field('preloader_text', 'option');
    ?> 
  <div class="block" style="display: block;">
    <div class="logo"><img src="<?php echo e($preload_logo['url']); ?>" alt="<?php echo e($preload_logo['alt']); ?> }}"></div>
    <p class="txt"><?php echo e($preload_text); ?></p>
  </div>
  <div class="svg">
    <svg id="dt_cell" class="forpc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1442 802" style=" color: #ccccccc;">
      <path class="preload_path" d="M1441,801V1H1V801ZM550,555c-19.1-18.49-63.43-61.39-71-130-10.39-94.12,56.75-160.83,70-174,13.87-13.79,77.64-77.15,168-69,72.53,6.54,118,55.17,144,83,24.69,26.41,59.72,63.89,66,122,8.14,75.32-37.83,131.47-53,150-11.88,14.51-72.67,88.76-171,88C621.67,624.37,568.42,572.83,550,555Z">
        <animate class="cell_loading" attributeName="d" repeatCount="indefinite" dur="6.5s" values="M1441,801V1H1V801ZM550,555c-19.1-18.49-63.43-61.39-71-130-10.39-94.12,56.75-160.83,70-174,13.87-13.79,77.64-77.15,168-69,72.53,6.54,118,55.17,144,83,24.69,26.41,59.72,63.89,66,122,8.14,75.32-37.83,131.47-53,150-11.88,14.51-72.67,88.76-171,88C621.67,624.37,568.42,572.83,550,555Z;
        M1441,801V1H1V801ZM545,538c-28-35.45-79.31-100.47-64-179,14.91-76.5,83.51-116.95,126-142,38.19-22.52,84.72-49.95,143-40,68.54,11.7,107.49,67.29,127.3,95.55C891.65,293,936.78,359.6,925,450c-3,23.14-12.61,88.83-70,139-8,7-74,62.85-164,49C614.66,626.25,571.91,572.09,545,538Z;
        M1441,801V1H1V801ZM536,509c-19-31.13-54.23-88.63-39-159,16.74-77.39,82.86-116.82,110-133,26.51-15.81,89.53-53.39,166-35,80.64,19.4,140.84,91.57,152,167,9.89,66.87-20.93,121.32-40,155-12.49,22.06-30.3,52.76-66,79-14,10.32-68.67,50.21-138,41C599.76,613.2,554.69,539.55,536,509Z;
        M1441,801V1H1V801ZM525,511c-10.32-16.57-48.59-83.15-26-165,22.85-82.81,91-119.8,108-129,19.1-10.36,95.07-48,183-16,6,2.18,106.55,40.73,135,146,5.4,20,17.91,78.3-11,140-21.42,45.7-54.69,70.08-70,81-16.28,11.62-80.59,56-168,42C662.06,607.77,575.74,592.5,525,511Z;
        M1441,801V1H1V801ZM550,555c-19.1-18.49-63.43-61.39-71-130-10.39-94.12,56.75-160.83,70-174,13.87-13.79,77.64-77.15,168-69,72.53,6.54,118,55.17,144,83,24.69,26.41,59.72,63.89,66,122,8.14,75.32-37.83,131.47-53,150-11.88,14.51-72.67,88.76-171,88C621.67,624.37,568.42,572.83,550,555Z"></animate>
        <animate class="cell_loaded" attributeName="d" begin="indefinite" repeatCount="1" dur="2s" values="M1441,801V1H1V801ZM565,552c-15.86-16.83-52.49-56.8-62-121-11.06-74.61,21.64-130.76,32-147,5.89-9.24,71.9-109.1,182-102,83.74,5.4,133,68.83,144,83,52.31,67.37,46.61,141.93,45,158-6.67,66.66-41.73,111.2-59,130-16.75,18.23-67.56,73.52-144,72C632.45,623.6,586.41,574.72,565,552Z;
        M1441,801V1H1V801ZM507,490c-43.86-56.77-97-125.59-76-198,19.37-66.66,90.19-97,116-108,110.21-47.15,216.64,3.29,243,17,33.19,17.27,111.3,57.38,135,146,3.22,12,22.88,90.52-23,163-27.41,43.31-64.65,63.4-83,73-18.68,9.78-89.43,43.59-172,20C579.39,583.68,543.46,537.19,507,490Z;
        M1441,801V1H1V801ZM437,492C308.22,394.14,243.59,343.93,232,281c-10.06-54.64,3-126.92,49-173,137.78-137.91,474.5,55.73,514,79,100.62,59.27,132.69,108.86,147,152,6.9,20.79,27,92.46-10,162-27.41,51.46-71.71,74.69-99,89-13.72,7.19-79.32,40.15-164,32C639.72,619.18,592.18,609.91,437,492Z;
        M1441,801V1H1V801ZM322,488c-95.75-69.11-175.5-128.34-174-209,1.76-95.07,115.29-160.75,133-171,191.82-111,440.44,0,530,40,62.72,28,156.48,102.67,344,252,131.29,104.55,183.77,155.59,174,207-10.2,53.67-83.24,81.54-128,98-184.08,67.68-365.33,10.93-530-43C557.1,624.7,439.28,572.65,322,488Z;
        M1441,801V1H1V801ZM158,583c-26.63-24.09-91.49-84.35-116-183.94C13.34,282.62,46.35,138.77,134.06,63.91,224.5-13.3,314,33.31,719,81c373.69,44,454,22.75,548.19,113.7C1341,266,1406.75,390.38,1395,529c-3.69,43.55-10.23,120.69-62,179-76.24,85.87-187,59.33-677,7.89C378,686.7,264.8,679.63,158,583Z;
        M1441,801V1H1V801ZM18,722c-32.31-51.78-2.92-81.21,1-320C23.09,153-7.87,125.41,26,73,96.52-36.12,273.41,15.83,709,18c454.25,2.27,640.74-52.52,713,62,25.24,40,8.83,56.73,8,307-.94,283.87,20.43,299.38-7,342-76,118.07-263.87,53.94-771,56C255,786.61,83.57,827.08,18,722Z;
        M1441,801V1H1V801ZM1,407V1H1441V801H1Z;"></animate>
      </path>
    </svg>
  </div>
</div>
<?php /**PATH /work/sites/highberry/wp-content/themes/highberry/app/ACF/Template/Components/preloader.blade.php ENDPATH**/ ?>