@extends('layouts.master')

@section('content')
        <div class="main-notification">
            <a href="https://www.facebook.com/teamprojectile/" target="_blank">
                <img class="notification-img" src="https://scontent-ams3-1.xx.fbcdn.net/v/t1.0-1/p320x320/25446032_1665735900136157_4549415181013751_n.png?_nc_cat=0&oh=e36998eac3bc5d76638d876d5c0d9817&oe=5BB94C98" alt="Team Projectile Sponsor Image">
                <h2 class="notification-title">Team Projectile</h2>
            </a>
        </div>
        <div class="main-notification">
            <a href="https://www.youtube.com/" target="_blank">
                <img class="notification-img" src="https://www.tech365.nl/wp-content/uploads/2017/08/new-youtube-logo-840x402.jpg" alt="YouTube Sponsor Image">
                <h2 class="notification-title">YouTube</h2>
            </a>
        </div>
        <div class="main-notification">
            <a href="https://www.twitch.tv/" target="_blank">
                <img class="notification-img" src="https://venturebeat.com/wp-content/uploads/2015/02/TWitch.jpg?fit=578%2C325&strip=all" alt="Twitch Sponsor Image">
                <h2 class="notification-title">Twitch.tv</h2>
            </a>
        </div>
        <div class="main-notification">
            <a href="https://sony-vegas-64bits.nl.softonic.com/" target="_blank">
                <img class="notification-img" src="https://crohasit.com/wp-content/uploads/2016/04/sony-vegas-pro-13-free-download.jpg" alt="Sony Vegas Sponsor Image">
                <h2 class="notification-title">Sony Vegas</h2>
            </a>
        </div>
        <div class="main-notification">
            <a href="https://obsproject.com/" target="_blank">
                <img class="notification-img" src="http://www.stemsire.com/uploads/9/1/0/1/91011270/est26p.png?320" alt="OBS Sponsor Image">
                <h2 class="notification-title">OBS Studio</h2>
            </a>
        </div>
        <div class="main-notification">
            <a href="https://www.patreon.com/" target="_blank">
                <img class="notification-img" src="data:image/png;base64,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" alt="Patreon Sponsor Image">
                <h2 class="notification-title">Patreon</h2>
            </a>
        </div>
@endsection
