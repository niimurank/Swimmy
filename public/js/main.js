//likeをされているかをclassで判定し、likeを行う。すでにされていればunliked
function toggleLike(postId) {
  const isLiked = $('#like-button-' + postId).hasClass('hover:bg-pink-200');
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: `posts/${isLiked ? 'unlike' : 'like'}/${postId}`,
    method: isLiked ? 'DELETE' : 'POST',
  })
    .done(function (data, status, xhr) {
      $('#likes-count-' + postId).text(data.likeCount);
      $('#like-button-' + postId)
        .toggleClass('hover:bg-pink-200', !isLiked)
        .toggleClass('hover:bg-pink-100', isLiked);
      $('#like-button-' + postId + ' svg').toggleClass('fill-pink-500');
    });
}