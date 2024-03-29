

<div class="replay-area-details">
    <h4 class="title">Leave a Reply</h4>
    <form action="---------------#">
        @csrf
        <input type="hidden" name="blog_id" value="{{$blog->id}}">
        <div class="row g-4">
            <div class="col-lg-6">
                <input type="text" placeholder="Your Name" name="name">
            </div>
            <div class="col-lg-6">
                <input type="email" placeholder="Your Name" name="email">
            </div>
            <div class="col-12">
                <input type="text" placeholder="Select Topic" name="topic">
                <textarea name="content"></textarea>
            </div>
        </div>
    </form>
</div>
