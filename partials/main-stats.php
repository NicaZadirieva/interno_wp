<?php
    /**
     * This is a statistics content for index.php
     * 
     */
?>

<?php
    /** VARIABLES */
    $stats_years = 12;
    $stats_success_projects = 85;
    $stats_active_projects = 15;
    $stats_happy_customers = 95;
?>

 <div class="stats bg page">
    <div class="container">
        <div class="stats__item">
            <div class="stats__item__number"><?php echo $stats_years ?></div>
            <div class="stats__item__text">Years Of Experience</div>
        </div>
        <div class="stats__item">
            <div class="stats__item__number"><?php echo $stats_success_projects ?></div>
            <div class="stats__item__text">Success Project</div>
        </div>
        <div class="stats__item">
            <div class="stats__item__number"><?php echo $stats_active_projects ?></div>
            <div class="stats__item__text">Active Project</div>
        </div>
        <div class="stats__item">
            <div class="stats__item__number"><?php echo $stats_happy_customers ?></div>
            <div class="stats__item__text">Happy CUstomers</div>
        </div>
    </div>
</div>