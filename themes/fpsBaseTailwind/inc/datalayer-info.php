<?php
$post_type = get_post_type(); //CHECKING IF THE PAGE COMES FROM A CPT - AND WHAT IS IT.
if ((is_singular('post')) or (is_home()))
{ //FIRST CONDITION (IF IT FROM A POST PAGE) 
?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'site-section',
            'section': 'Blog'
        });
    </script>
<?php }
else if ($post_type !== ('page'))
{ //IF CPT IS DIFFRENT TO PAGE CPT
    $post_type_data = get_post_type_object($post_type); //GETTING ARRAY

    $post_type_slug = $post_type_data->labels->menu_name;
    //GETTING LABEL OF ITS CPT (IF LABEL IS EMPTY, IT TAKES THE CPT NAME) 
?>

    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'site-section',
            'section': '<?php echo html_entity_decode($post_type_slug); ?>'
        });
    </script>
<?php
}
else
{
    $parent_title = get_the_title($post->post_parent); //SIMPLE PAGE 
?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'site-section',
            'section': '<?php echo html_entity_decode($parent_title); ?>'
        });
    </script>
<?php } ?>