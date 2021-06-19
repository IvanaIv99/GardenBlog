$(document).ready(function (){

    $('.search-icon').click(search);
    $("#sortPostsDdl").change(sort);
    $(".page-link").click(loadMorePosts);
})

 function search(){
    let text=$('#search-input').val();
    $.ajax({
        url: "posts/search",
        method: "get",
        data: {
            text
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            showPosts(response);
            changePagination(response.last_page, response.current_page);
        }
    });
}

function showPosts(posts){
    let html="";
    for(let post of posts.data){
        html+=`
           <tr>
                                        <td class="text-center text-muted">${post.id}</td>
                                        <td class="text-center">${post.title}</td>
                                    <td class="text-center">${post.category.name}</td>
                                        <td class="text-center">${post.user.first_name + " " + post.user.last_name}</td>
                                    <td class="text-center text-muted">${post.created_at}</td>
                                    <td class="text-center text-muted">${post.updated_at}</td>
                                    <td class="text-center text-muted">${post.visits.length}</td>
                                    <td class="text-center text-muted">${post.comments.length}</td>
                                        <td class="text-center">
                                            <a href="{{route('post.edit',${post.id})}}" class="btn btn-primary btn-sm btn-admin-edit-post">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm">Delete</button>
                                        </td>
                                </tr>
        `
    }

    $("#posts-tablebody").html(html);
}

function sort(){
    let sortval=$(this).val();

    $.ajax({
        url: "posts/sort",
        method: "get",
        data: {
            sortval
        },
        dataType: "json",
        success: function (response) {
            showPosts(response);
            changePagination(response.last_page, response.current_page);
        }
    });
}
function changePagination(totalLinks, currentPage){
    let html = "";
    for(let i = 1; i <= totalLinks; i++){
        if(i != currentPage){
            //html+=`<li><a href="#" data-page="${i}" class="page-link">${i}</a></li>`;
            html += `<li class="page-item"><a class="page-link" id="link${i}" data-page="${i}" >${i}</a></li>`;
            //html+=`<li><a href="#" data-page="${i}">${i}</a></li>`;
        }else{
            //html+=`<li><a class="page-link active" aria-current="page" data-page="${i}" >${i}</a></li>`;
            html += `<li class="page-item active"><a class="page-link" id ="link${i}" data-page="${i}" >${i}</a></li>`;
            //html+=`<li class="active" aria-current="page" data-page="${i}"><span>${i}</span></li>`;
        }
    }
    $(".pagination").html(html);
    $(".page-link").click(loadMorePosts);
}
function loadMorePosts(e){
    //let sortValue = $("input[name=btnPrice]:checked").val();
    e.preventDefault();
    let page = $(this).data("page");
    console.log(page)
}

