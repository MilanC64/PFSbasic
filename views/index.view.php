<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PFSbasic</title>
  </head>
  <body>
    <div class="page_wrapper"><!-- .page_wrapper -->

      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="about">About us</a></li>
          <li><a href="about/culture">About Culture</a></li>
          <li><a href="contact">Contact us</a></li>
        </ul>
      </nav>

      <h1>Tasks</h1>
      <ul>

      <?php foreach ($tasks as $task) :?>

        <li>

        <?php if ($task->completed) :?>

          <strike><?= $task->description ?></strike>

        <?php else :?>

          <?= $task->description ?>

        <?php endif ?>

        </li>

      <?php endforeach ?>

      </ul>
    </div><!-- /.page_wrapper -->
  </body>
</html>
