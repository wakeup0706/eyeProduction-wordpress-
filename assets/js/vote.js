$(document).ready(function() {

    
    var postID1 = $('.like-container').attr('data-postid');
    if(localStorage.getItem('liked_' + postID1)){
        $(".heart > path").css("fill","#EA442B");
    }
    
    let view_count = $('.releaseDate .view').attr('view-count');
    let like_count = $('.like-container').attr('like-count');
    
    let result = ((like_count/view_count)*100);
    $('.like .name').text(result.toString().slice(0, 4)+"%");
    $(document).on('click', '.like-container', function(e) {
        var $container = $(this).closest('.like-container');
        var postID = $container.data('postid');
        e.stopPropagation();
        // Prevent double vote
        if (localStorage.getItem('liked_' + postID)) {
            $(".heart > path").css("fill","#EA442B");
            return;
        }

        $.post(voteData.ajax_url, {
            action: 'vote_good',
            nonce: voteData.nonce,
            post_id: postID
        }, function(response) {
            if (response.success) {
                localStorage.setItem('liked_' + postID, '1');
                $container.find('.like-count-num').text(response.data.new_count);
                $container.find('.like-button').addClass('voted');
                $(".heart > path").css("fill","#EA442B");
            } else {
                alert("障害が発生しました。");
            }
        });
    });
    
});