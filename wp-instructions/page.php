<div class="container-fluid">
    <!-- Your contact -->
    <div class="wrap row">
        <h2>Instructions</h2></h2>
        <div class="alert alert-info">
            <p>Do you have issues with the page? Send email to <a href="mailto:maja.kraljic@gmail.com">maja.kraljic@gmail.com</a></p>
        </div>
    </div>

<?php
/*   Tabs     */
?>
    <?php
    /*    Add navigation     */
    ?>
    <ul class="nav nav-tabs row">
      <li class="active"><a data-toggle="tab" href="#menu">Menu</a></li>
      <li><a data-toggle="tab" href="#menu1">Tab 1</a></li>
      <li><a data-toggle="tab" href="#menu2">Tab 2</a></li>
      <li><a data-toggle="tab" href="#menu3">Tab 3</a></li>
    </ul>

<?php
/*   Tab content     */
?>
    <div class="tab-content row">
      <div id="menu" class="tab-pane fade in active">
        <?php
        /*    Add content for the menu tab     */
        ?>
        <h3>I would like to</h3>
        <ul class="menu list">
            <li><a data-toggle="tab" href="#menu1">Task 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Task 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Task 3</a></li>
        </ul>
      </div>

      <div id="menu1" class="tab-pane fade">
        <?php
        /*    Add content for the 1st tab     */
        ?>
      </div>

      <div id="menu2" class="tab-pane fade">
        <?php
        /*    Add content for the 2nd tab     */
        ?>
      </div>

      <div id="menu3" class="tab-pane fade">
        <?php
        /*    Add content for the 3rd tab     */
        ?>
      </div>
    </div>
</div>