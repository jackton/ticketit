<?php $notification_owner = unserialize($notification_owner); ?>
<?php $ticket = unserialize($ticket); ?>
<?php $original_ticket = unserialize($original_ticket); ?>

<b>{{ $notification_owner->name }}</b> changed the status of <b>{{ $ticket->subject }}</b>
from {{ $original_ticket->status->name }} to {{ $ticket->status->name }}
<br>
<hr>
Go to {!! link_to_route(config('ticketit.main_route').'.show', $ticket->subject, $ticket->id) !!}
