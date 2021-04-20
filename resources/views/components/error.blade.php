<div class="column is-three-fifths is-offset-one-fifth">
    <article class="message is-primary">
        <div class="message-header">
            <p class="is-size-4">Error</p>
            <i class="far fa-dizzy fa-2x"></i>
        </div>
        <div class="message-body has-text-left">
            {{ $errors->first() }}
        </div>
    </article>
</div>