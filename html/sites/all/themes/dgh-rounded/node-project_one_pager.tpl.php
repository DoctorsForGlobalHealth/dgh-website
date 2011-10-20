<?php
// custom styling for project one-pagers

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>

<?php if ($teaser) { ?>

  <h2>Featured Project: <a href="<?php print $node->path?>"><?php print $node->title ?></a></h2>
  <table cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td><a href="<?php print $node->path ?>"><?php print $node->field_project_pictures[0]['view'] ?></img></td>
      <td>
      <p>
      <?php 
        $len = 420;
        $trimmed_text = $node->field_project_current[0]['value'];
        if(strlen($trimmed_text)>$len)
          $trimmed_text = substr($trimmed_text,0,$len)."...";
        print $trimmed_text;
      ?>
      <br />
      <a href="<?php print $node->path ?>">Learn more about <?php print $node->title ?></a>
      </p>          
      </td>
    </tr>
  </table>

<?php } else { ?>

<div class="project-one-pager node">

  <?php print $links; ?>

  <?php if($node->field_project_pictures[0]['view']){ ?>
  
      <div id="project-pictures" class="feature" style="float:right;margin-right:10px;margin-left:8px;margin-bottom:5px;">
        <div class="feature-rounded-top"><img alt="" class="feature-rounded-corner" src="<?php print base_path().path_to_theme(); ?>/images/feature-rounded-tl.gif" style="display: none" /></div>
        <div class="feature-content">
          <div class="picture-list" style="margin-right:auto;margin-left:auto;vertical-align:middle;">
          <?php foreach($node->field_project_pictures as $pic) { 
                  print $pic['view'];
                }
          ?>
          </div>
        </div>
        <div class="feature-rounded-bottom"><img alt="" class="feature-rounded-corner" src="<?php print base_path().path_to_theme(); ?>/images/feature-rounded-bl.gif" style="display: none" /></div>
      </div>
  
  <?php } ?>

  <?php if($node->field_project_history[0]['view']){ ?>

    <a name="project-history"></a>
    <h2>History of DGH In the Community</h2>
  
    <div class="project-history">
      <?php print $node->field_project_history[0]['view']; ?>
    </div>

  <?php } ?>

  <?php if($node->field_project_current[0]['view']){ ?>
  
    <a name="project-current"></a>
    <h2>Current DGH Projects</h2>
  
    <div class="project-current">
      <?php print $node->field_project_current[0]['view']; ?>
    </div>

  <?php } ?>

  <?php if($node->field_project_opportunities[0]['view']){ ?>

    <a name="project-opportunities"></a>
    <h2>Opportunities to Make a Difference</h2>

    <div class="project-opportunities">
      <ul>
      <?php foreach($node->field_project_opportunities as $opportunity) { ?>
        <li><?php print $opportunity['view'] ?></li>    
      <?php }  ?>
      </ul>
    </div>

  <?php } ?>

</div>

<script type="text/javascript">

//http://malsup.com/jquery/cycle/lite/
function startSlideshow(){
  $('.picture-list').cycle({ 
      delay:  2000, 
      speed:  500
  });
}

$(startSlideshow);

</script>

<?php } ?>