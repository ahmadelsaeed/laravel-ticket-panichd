@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-default" !!}">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicons {{ $comment->type=='note' ? 'glyphicon glyphicon-pencil text-info' : 'glyphicon glyphicon-envelope text-warning'}}" aria-hidden="true"></span> {!! $comment->user->name !!}
                    <span class="pull-right"> {!! $comment->created_at->diffForHumans() !!} </span>
                </h3>
            </div>
            <div class="panel-body">
                <div class="content">
                    <p> {!! $comment->html !!} </p>
                </div>
            </div>
        </div>
    @endforeach
@endif