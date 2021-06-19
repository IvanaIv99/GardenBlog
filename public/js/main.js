$(document).ready(function(){


    $(".category").click(categoryFilter);
    $(".search-field").keyup(searchOnSite);
    $(".sort").click(sortFilter);


    $(".page-link").click(loadMorePosts);

    //KOMENTARI

    $('#formcomment').submit(addComment);
    $('.delete-btn-comment').click(deleteComment);
    $('.edit-btn-comment').click(editComment);
});

function categoryFilter(e){
    e.preventDefault();
    let category=$(this).attr('id');

    getPosts(1,category,null,null);
}

function searchOnSite(){

    let text = $(this).val();

    getPosts(1,null,null,text);

}

function sortFilter(e){
    e.preventDefault();
    let sort=$(this).attr('id');
    getPosts(1,null,sort,null);


}

function showPosts(posts,userId){

    let url=window.location.href;

    let html = "";
    for(let post of posts) {

        html += `
        <div class="blog-box row">
    <div class="col-md-4">
        <div class="post-media">
            <a href="${url}/post/${post.id}" title="">
                <img src="images/gardening/${post.thumbPhoto}" alt="${post.title}" class="img-fluid">
                <div class="hovereffect"></div>

            </a>
        </div>
    </div>

    <div class="blog-meta big-meta col-md-8">
        <span class="bg-aqua"><a href="#" title="">${post.category.name}</a></span>

<!--EDIT BTN-->

<!--        @if(session()->has('user') &&  $post->user_id==session('user')->id )-->
<!--        <a href="{{route('edit-post',['id'=>$post->id])}}" class="float-right addButton rounded p-2 text-white text-center smaller">EDIT</a>-->
<!--        @endif-->
<!--       if(post.user_id == userId) -->
       <h4><a href="${url}post/${post.id}" title="">${post.title}</a></h4>
        <p>${(post.content).substring(0,150) }...<a href="${url}post/${post.id}">Read More</a></p>
        <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i>${post.visits.length}</a></small>
        <small><a href="${url}post/${post.id}" title="">${post.created_at}</a></small>
        <small><a href="${url}post/${post.id}" title="">by ${post.user.first_name + " " + post.user.last_name}</a></small>
    </div>
</div>
<hr class="invis">

            `;
    }
    $("#home-posts").html(html);
}

function changePagination(totalLinks, currentPage){
    let html = "";
    for(let i = 1; i <= totalLinks; i++){
        if(i != currentPage){
            //html+=`<li><a href="#" data-page="${i}" class="page-link">${i}</a></li>`;
            html += `<li class="page-item"><a class="page-link" id="link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }else{
            //html+=`<li><a class="page-link active" aria-current="page" data-page="${i}" >${i}</a></li>`;
            html += `<li class="page-item active"><a class="page-link" id = "link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }
    }
    $(".pagination").html(html);
    $(".page-link").click(loadMorePosts);
}

function loadMorePosts(e){
    e.preventDefault();
    let category = $(".category").attr('id');
    let sort = $(".sort").attr('id');
    let text = $(".search-field").val();
    let page = $(this).data("page");
    getPosts(page, category,sort,text);
}

function getPosts(page,category,sort,text){

    $.ajax({
        url: "posts/fetch",
        method: "get",
        data: {
            page,
            category,
            sort,
            text
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            let posts=response[0].data;
            let userId=response[1];
            showPosts(posts,userId);
            changePagination(response[0].last_page, response[0].current_page);

        }
    });

}



function addComment(e){
    e.preventDefault();

    let content = $("#comm-content").val();

    let token = $('input[name="_token"]').val();
    //var postId=$(this).data('post');
    let url=$("#formcomment").attr('action');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        method:'post',
        dataType: 'json',
        data: {
            '_token':token,
            'content':content
        },
        success: function(response){

            let html=``;
            html+=` <div class="media" id="comment-${response.data[0].id}">
                            <a class="media-left" href="#">
                                <img src="../images/profilePhotos/${response.data[1][0].photo}" alt="" class="rounded-circle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading user_name"><small>${response.data[1][0].first_name}</small></h4>
                                <p>${response.data[0].content}</p>
                                <h5 class="media-heading user_name"><small>${response.data[0].created_at}</small></h5>

                            </div>

                        </div>`
            $('.comments-list').append(html);

        },
        error: function(xhr, status, error){
            alert(error);
        }
    });

}

function deleteComment(e){

    e.preventDefault();
    let id=$(this).data('id');
    let token=$(this).data("token");
    let url=$(this).data("action");
    console.log(url)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        method:"delete",
        dataType:'json',
        data: {
            'id':id,
            '_token':token
        },
        success: function(){
            $('#comment-' + id).remove();
        },
        error: function(xhr, status, error){
            alert(error);
        }
    });
}




function editComment(e){
    e.preventDefault();
    $(this).hide();
    $('.edit-comment-form').show();
    $(".comment-cancel").click(function (e){
        e.preventDefault();
        $('.edit-btn-comment').show();
        $('.edit-comment-form').hide();

    })

    $('#edit-btn').click(function (e){
        e.preventDefault();
        let comment=$('#edit-comm-content').val();
        let id=$(this).data('id');
        let url=$(this).data('url');
        let token=$(this).data('token');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            method:'put',
            dataType: 'json',
            data: {
                '_token':token,
                'comment':comment,
                'id':id
            },
            success: function(response){

                $('.edit-comment-form').hide();

                let html="<p style='color: #5cb85c'>Your comment is edited!</p>";
                $('.media-body').append(html);

            },
            error: function(xhr, status, error){
                alert(error);
            }
        });
    })


}
