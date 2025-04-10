function sortAndRedirect(postId, sortType) {
    jQuery.ajax({
        url: ajaxurl,
        type: 'POST',
        data: {
            action: 'sort_posts',
            post_id: postId,
            sort_type: sortType
        },
        success: function(response) {
            if (response.success) {
                window.location.href = response.data.url;
            } else {
                console.error('Sorting failed:', response.data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Ajax error:', error);
        }
    });
} 