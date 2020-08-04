@extends('layouts.app')

@section('content')

  

    <div class="card">
        <div class="card-header">Notifications</div>

        <div class="card-body">

            <ul class="list-group">
                @foreach ($notifications as $notification)

                    <li class="list-group-item">
                        
                        @if ( $notification->type === 'App\Notifications\NewReplyAdded' )

                           A new Reply was Add to your Discussion On

                            <strong> {{ $notification->data['discussion']['title'] }}</strong>

                            <a href="{{ route('discussions.show',$notification->data['discussion']['slug']) }}" class="btn float-right btn-sm btn-info">
                                
                                View Discussion
                                
                            </a>
                            
                        @endif

                        @if ( $notification->type === 'App\Notifications\ReplyMarkedAsBestReply' )

                            You reply to the discussion

                            <strong>

                                {{ $notification->data['discussion']['title'] }}

                            </strong>was marked as best reply

                            <a href="{{ route('discussions.show',$notification->data['discussion']['slug']) }}" class="btn float-right btn-sm btn-info">
                                
                                View Discussion
                            </a>
                            
                        @endif

                    </li>
                
                @endforeach
            </ul>
           
        </div>
    </div>

@endsection
