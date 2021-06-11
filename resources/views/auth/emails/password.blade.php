Click here to reset your password:
<a href="{{ $link = url('admin/mat-khau/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
    {{ $link }}
</a>
