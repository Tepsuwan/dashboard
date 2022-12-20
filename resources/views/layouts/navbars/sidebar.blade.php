<div class="sidebar">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('RD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Racha Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug = 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-haspopup="true" aria-expanded="false">
                    <i class="tim-icons tim-icons icon-paper" ></i>
                    <span class="nav-link-text" >{{ __('Stats') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse " id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-settings-gear-63"></i>
                                <p>{{ __('settings') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug = 'racha') class="active " @endif>
                            <a  href="{{ route('pages.amb')  }}" >
                                <i class="tim-icons icon-bank"></i>
                                <p>{{ __('Amb') }}</p>
                            </a>
                            
                        </li>
                        <li @if ($pageSlug = 'racha') class="active " @endif>
                            <a  href="{{ route('pages.racha')  }}" >
                                <i class="tim-icons icon-world"></i>
                                <p>{{ __('Racha') }}</p>
                            </a>
                            
                        </li>
                        
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <div class="collapse show" id="laravel-examples">
                </div>   
                    </ul>
                </div>
                
                </li>
            </li>

            <li>
                 <a data-toggle="collapse" href="#laravel-examples" aria-haspopup="true" aria-expanded="false">
                    <i class="tim-icons icon-align-center" ></i>
                    <span class="nav-link-text" >{{ __('Bot slot') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse " id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'Bot state') class="active " @endif>
                            <a href="{{ route('pages.botstats')  }}">
                                <i class="tim-icons icon-sound-wave"></i>
                                <p>{{ __('Bot stats') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug = 'Bot slot') class="active " @endif>
                                <a href="{{ route('pages.botslot') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Brand config') }}</p>
                                </a>
                        </li>
                  
                        
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <div class="collapse show" id="laravel-examples">
                </div>   
                    </ul>
                </div>
                
                </li>
            </li>
        </ul>

        
       
    </div>
</div>
