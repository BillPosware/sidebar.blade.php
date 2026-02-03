<!-- Left side column. contains the logo and sidebar -->
<aside class="side-bar tw-fixed tw-top-0 tw-left-0 tw-hidden tw-h-screen tw-w-[300px] xl:tw-w-[300px] lg:tw-flex lg:tw-flex-col tw-shrink-0 modern-sidebar tw-z-50"
    style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 50%, #f1f3f5 100%);"
    role="complementary"
    aria-label="Sidebar navigation">

    <!-- sidebar: style can be found in sidebar.less -->

    {{-- <a href="{{route('home')}}" class="logo">
		<span class="logo-lg">{{ Session::get('business.name') }}</span>
	</a> --}}

    <a href="{{ route('home') }}" 
        class="sidebar-logo-container tw-flex tw-items-center tw-justify-center tw-w-full tw-h-20 tw-shrink-0 tw-relative tw-overflow-hidden">
        <div class="sidebar-logo-bg"></div>
        <img src="{{ asset('img/posify-logo.png') }}" alt="BillPosware" class="sidebar-logo tw-relative tw-z-10" />
    </a>

    <!-- Sidebar Menu -->
    <style>
        /* Enterprise-Grade Sidebar - Professional Design */
        .modern-sidebar {
            background: 
                linear-gradient(180deg, #ffffff 0%, #fafbfc 30%, #f8f9fa 100%),
                radial-gradient(circle at 0% 0%, rgba(99, 102, 241, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 100% 100%, rgba(139, 92, 246, 0.02) 0%, transparent 50%);
            box-shadow: 
                4px 0 32px rgba(0, 0, 0, 0.08),
                2px 0 16px rgba(0, 0, 0, 0.04),
                0 0 0 1px rgba(0, 0, 0, 0.05);
            position: fixed !important;
            top: 0;
            left: 0;
            width: 300px !important;
            height: 100vh;
            border-right: 1px solid rgba(0, 0, 0, 0.08);
            z-index: 1000;
            backdrop-filter: blur(20px);
        }

        .modern-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(99, 102, 241, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(139, 92, 246, 0.04) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        /* Logo Container - Enterprise Design */
        .sidebar-logo-container {
            background: 
                linear-gradient(135deg, #ffffff 0%, #fafbfc 100%),
                radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.04) 0%, transparent 70%);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            position: relative;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.04),
                inset 0 -1px 0 rgba(0, 0, 0, 0.03);
        }

        .sidebar-logo-container:hover {
            background: 
                linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%),
                radial-gradient(circle at 50% 0%, rgba(99, 102, 241, 0.06) 0%, transparent 70%);
            box-shadow: 
                0 4px 12px rgba(0, 0, 0, 0.06),
                inset 0 -1px 0 rgba(0, 0, 0, 0.04);
        }

        .sidebar-logo-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 50% 50%, rgba(99, 102, 241, 0.08) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar-logo-container:hover .sidebar-logo-bg {
            opacity: 1;
        }

        .sidebar-logo {
            max-width: 260px;
            max-height: 80px;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .sidebar-logo-container:hover .sidebar-logo {
            transform: scale(1.05);
        }

        /* Modern Menu Items */
        #side-bar {
            position: relative;
            z-index: 1;
            overflow-y: auto;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
            scroll-behavior: smooth;
        }
        
        /* Global Font Size Reset - Prevent Inconsistencies */
        #side-bar * {
            box-sizing: border-box;
            max-width: 100%; /* Prevent horizontal scroll on mobile */
        }
        
        /* Force consistent font sizes - inline styles will override */

        /* Enterprise Menu Items - Professional Design - Fixed Size */
        .custom-hover,
        .menu-item-parent,
        .drop_down {
            background: rgba(255, 255, 255, 0.85) !important;
            color: #1e293b !important;
            position: relative;
            margin: 4px 10px !important;
            border-radius: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            backdrop-filter: blur(20px);
            display: flex !important;
            align-items: center;
            min-width: 0;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 
                0 1px 2px rgba(0, 0, 0, 0.03),
                0 0 0 0 rgba(99, 102, 241, 0),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            width: calc(100% - 20px) !important;
            font-weight: 500;
            letter-spacing: -0.011em;
            font-size: 15px !important;
            line-height: 1.5;
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            padding: 0.5rem 0.75rem !important;
            box-sizing: border-box !important;
        }
        
        /* Ensure all parent menu items have consistent font size and height */
        .menu-item-parent,
        .menu-item-parent * {
            font-size: 15px !important;
        }
        
        .menu-item-parent > span:nth-of-type(2) {
            font-size: 15px !important;
            font-weight: 500 !important;
        }
        
        /* Ensure all SVG icons have consistent sizing */
        .custom-hover svg,
        .drop_down svg,
        .menu-item-child svg {
            width: 20px !important;
            height: 20px !important;
            flex-shrink: 0 !important;
        }
        
        /* Ensure FontAwesome icons (if any remain) are properly sized */
        .custom-hover i,
        .drop_down i,
        .menu-item-child i {
            font-size: 18px !important;
            width: 20px !important;
            height: 20px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        
        /* Force consistent height for all menu items - Override any conflicting styles */
        #side-bar a.custom-hover,
        #side-bar a.menu-item-parent,
        #side-bar a.drop_down {
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            box-sizing: border-box !important;
            padding: 0.5rem 0.75rem !important;
        }
        
        /* Override Tailwind padding classes */
        #side-bar a[class*="tw-px-3"],
        #side-bar a[class*="tw-py-2"] {
            padding: 0.5rem 0.75rem !important;
        }
        
        /* Active menu item - Keep same height to prevent layout shift */
        #side-bar a.custom-hover.active-menu-item {
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            box-sizing: border-box !important;
            padding: 0.5rem 0.75rem !important;
        }
        
        /* Ensure dropdown items also have fixed height */
        .menu-dropdown-wrapper .drop_down {
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            padding: 0.5rem 0.75rem !important;
        }
        
        /* Dropdown active state - inherit all active styles */
        .menu-dropdown-wrapper .drop_down.active-menu-item,
        .drop_down.active-menu-item {
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            padding: 0.5rem 0.75rem !important;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.14) 0%, rgba(139, 92, 246, 0.11) 50%, rgba(99, 102, 241, 0.14) 100%) !important;
            color: #4338ca !important;
            transform: translateX(5px);
            box-shadow: 
                0 8px 24px rgba(99, 102, 241, 0.2),
                0 4px 12px rgba(99, 102, 241, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(99, 102, 241, 0.1),
                0 0 0 1px rgba(99, 102, 241, 0.3) !important;
            border-color: rgba(99, 102, 241, 0.4) !important;
            font-weight: 600;
            letter-spacing: -0.015em;
        }
        
        /* Active dropdown left indicator bar - use ::after to avoid conflict with bottom connector */
        .drop_down.active-menu-item::after {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%) scaleY(1);
            width: 4px;
            height: 70%;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #a78bfa 50%, #8b5cf6 100%, #6366f1 100%);
            border-radius: 0 4px 4px 0;
            box-shadow: 
                0 0 24px rgba(99, 102, 241, 0.6),
                0 0 12px rgba(99, 102, 241, 0.4),
                0 0 6px rgba(139, 92, 246, 0.3);
            z-index: 1;
            pointer-events: none;
        }
        
        /* Ensure dropdown items also get the left indicator from custom-hover */
        .drop_down.custom-hover.active-menu-item::before {
            transform: translateY(-50%) scaleY(1) !important;
            height: 70% !important;
            width: 4px !important;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #a78bfa 50%, #8b5cf6 100%, #6366f1 100%) !important;
            box-shadow: 
                0 0 24px rgba(99, 102, 241, 0.6),
                0 0 12px rgba(99, 102, 241, 0.4),
                0 0 6px rgba(139, 92, 246, 0.3) !important;
        }
        
        /* Active dropdown icon styling */
        .drop_down.active-menu-item svg,
        .drop_down.active-menu-item i,
        .drop_down.active-menu-item > span:first-of-type svg,
        .drop_down.active-menu-item > span:first-of-type i {
            transform: scale(1.1);
            filter: drop-shadow(0 2px 6px rgba(99, 102, 241, 0.3));
            color: #4f46e5 !important;
        }
        
        .custom-hover:hover {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(250, 251, 252, 0.95) 100%) !important;
            color: #0f172a !important;
            border-color: rgba(99, 102, 241, 0.2);
            box-shadow: 
                0 4px 16px rgba(0, 0, 0, 0.08),
                0 2px 8px rgba(99, 102, 241, 0.08),
                0 0 0 1px rgba(99, 102, 241, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            transform: translateX(3px);
        }

        .custom-hover > span:first-of-type {
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: 20px;
            position: relative;
            z-index: 2;
        }

        .custom-hover > span:nth-of-type(2) {
            flex: 1 1 0%;
            min-width: 0;
            max-width: calc(100% - 50px);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            position: relative;
            z-index: 2;
        }
        
        /* Tooltip for truncated menu items */
        .custom-hover[title]:hover::after {
            content: attr(title);
            position: absolute;
            left: calc(100% + 12px);
            top: 50%;
            transform: translateY(-50%);
            background: rgba(15, 23, 42, 0.95);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 13px;
            white-space: nowrap;
            z-index: 10000;
            pointer-events: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            opacity: 0;
            animation: tooltipFadeIn 0.2s ease-out 0.3s forwards;
        }
        
        @keyframes tooltipFadeIn {
            to {
                opacity: 1;
            }
        }
        
        /* Only show tooltip if text is truncated */
        .custom-hover > span:nth-of-type(2):not(:hover) {
            /* Tooltip will only appear on parent hover if text is actually truncated */
        }

        .custom-hover > svg,
        .custom-hover .svg {
            flex-shrink: 0 !important;
            flex-grow: 0 !important;
            flex-basis: 16px !important;
            margin-left: auto !important;
            order: 999;
            position: relative;
            z-index: 2;
        }

        .drop_down {
            width: 100%;
            display: flex !important;
            align-items: center;
        }

        .drop_down > span:nth-of-type(2) {
            flex: 1 1 0%;
            min-width: 0;
            max-width: calc(100% - 60px);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            margin-right: 8px;
        }

        .drop_down > .svg {
            flex: 0 0 16px;
            order: 3;
            min-width: 16px;
        }

        .custom-hover::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%) scaleY(0);
            width: 3px;
            height: 0;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #6366f1 100%);
            border-radius: 0 4px 4px 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 0 10px rgba(99, 102, 241, 0.4);
            z-index: 1;
            pointer-events: none;
        }

        .custom-hover::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(139, 92, 246, 0.06) 50%, rgba(99, 102, 241, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 14px;
            z-index: -1;
        }

        .custom-hover:hover:not(.active-menu-item) {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(139, 92, 246, 0.08) 50%, rgba(99, 102, 241, 0.1) 100%) !important;
            color: #4f46e5 !important;
            transform: translateX(3px);
            box-shadow: 
                0 4px 16px rgba(99, 102, 241, 0.12),
                0 2px 8px rgba(99, 102, 241, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.85),
                0 0 0 1px rgba(99, 102, 241, 0.18);
            border-color: rgba(99, 102, 241, 0.25);
        }

        .custom-hover:hover::before {
            transform: translateY(-50%) scaleY(1);
            height: 60%;
            box-shadow: 0 0 12px rgba(99, 102, 241, 0.5);
        }

        .custom-hover:hover::after {
            opacity: 1;
        }

        .custom-hover svg,
        .custom-hover i {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.05));
            color: #64748b;
        }
        
        .custom-hover > span:first-of-type svg,
        .custom-hover > span:first-of-type i {
            color: #64748b;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-hover > span:first-of-type {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-hover:hover > span:first-of-type {
            transform: scale(1.1);
        }

        /* Active State - Enterprise Design - Fixed Size (No Layout Shift) */
        .custom-hover.active-menu-item {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.14) 0%, rgba(139, 92, 246, 0.11) 50%, rgba(99, 102, 241, 0.14) 100%) !important;
            color: #4338ca !important;
            transform: translateX(5px);
            box-shadow: 
                0 8px 24px rgba(99, 102, 241, 0.2),
                0 4px 12px rgba(99, 102, 241, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(99, 102, 241, 0.1),
                0 0 0 1px rgba(99, 102, 241, 0.3);
            border-color: rgba(99, 102, 241, 0.4);
            font-weight: 600;
            height: 2.75rem !important;
            min-height: 2.75rem !important;
            max-height: 2.75rem !important;
            padding: 0.5rem 0.75rem !important;
            letter-spacing: -0.015em;
        }

        .custom-hover.active-menu-item::before {
            transform: translateY(-50%) scaleY(1);
            height: 70%;
            width: 4px;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #a78bfa 50%, #8b5cf6 100%, #6366f1 100%);
            box-shadow: 
                0 0 24px rgba(99, 102, 241, 0.6),
                0 0 12px rgba(99, 102, 241, 0.4),
                0 0 6px rgba(139, 92, 246, 0.3);
            border-radius: 0 4px 4px 0;
        }

        .custom-hover.active-menu-item::after {
            opacity: 1;
        }

        .custom-hover.active-menu-item svg,
        .custom-hover.active-menu-item i {
            transform: scale(1.1);
            filter: drop-shadow(0 2px 6px rgba(99, 102, 241, 0.3));
            color: #4f46e5;
        }
        
        .custom-hover:hover:not(.active-menu-item) svg,
        .custom-hover:hover:not(.active-menu-item) i,
        .custom-hover:hover:not(.active-menu-item) > span:first-of-type svg,
        .custom-hover:hover:not(.active-menu-item) > span:first-of-type i {
            color: #6366f1;
            transform: scale(1.05);
            filter: drop-shadow(0 2px 4px rgba(99, 102, 241, 0.2));
        }

        /* Visual connector from main menu item bottom - only show when not active (to avoid conflict with left indicator) */
        .drop_down::before {
            content: '';
            position: absolute;
            left: 1.5rem;
            bottom: 0;
            width: 0;
            height: 2.5px;
            background: linear-gradient(to right, 
                rgba(99, 102, 241, 0.5) 0%, 
                rgba(99, 102, 241, 0.4) 100%);
            border-radius: 2px 2px 0 0;
            z-index: 2;
            transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 -2px 4px rgba(99, 102, 241, 0.2);
        }
        
        /* Hide bottom connector when active (left indicator takes priority) */
        .drop_down.active-menu-item::before,
        .menu-parent-active .drop_down::before {
            width: 0 !important;
            height: 0 !important;
            opacity: 0;
        }
        
        /* Show bottom connector only when parent is active but item itself is not */
        .menu-parent-active .drop_down:not(.active-menu-item)::before {
            width: 1.25rem;
            height: 2.5px;
            opacity: 1;
            box-shadow: 
                0 -4px 8px rgba(99, 102, 241, 0.3),
                0 -2px 4px rgba(99, 102, 241, 0.2);
        }

        .drop_down .svg {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            flex-shrink: 0 !important;
            flex-grow: 0 !important;
            flex-basis: 16px !important;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.08));
            color: #64748b;
            width: 16px !important;
            height: 16px !important;
            display: block;
        }

        .drop_down:hover .svg,
        .menu-parent-active .drop_down .svg {
            transform: rotate(90deg) scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(99, 102, 241, 0.3));
            color: #6366f1;
        }

        /* Parent menu active state - ensure dropdown inherits all active styles */
        .menu-parent-active .drop_down {
            color: #4338ca !important;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.14) 0%, rgba(139, 92, 246, 0.11) 50%, rgba(99, 102, 241, 0.14) 100%) !important;
            transform: translateX(5px);
            box-shadow: 
                0 8px 24px rgba(99, 102, 241, 0.2),
                0 4px 12px rgba(99, 102, 241, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(99, 102, 241, 0.1),
                0 0 0 1px rgba(99, 102, 241, 0.3) !important;
            border-color: rgba(99, 102, 241, 0.4) !important;
            font-weight: 600;
        }
        
        /* Parent active left indicator - ensure it shows when parent has active children */
        .menu-parent-active .drop_down.custom-hover::before {
            transform: translateY(-50%) scaleY(1) !important;
            height: 70% !important;
            width: 4px !important;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #a78bfa 50%, #8b5cf6 100%, #6366f1 100%) !important;
            box-shadow: 
                0 0 24px rgba(99, 102, 241, 0.6),
                0 0 12px rgba(99, 102, 241, 0.4),
                0 0 6px rgba(139, 92, 246, 0.3) !important;
        }
        
        /* Parent active icon styling */
        .menu-parent-active .drop_down > span:first-of-type svg,
        .menu-parent-active .drop_down > span:first-of-type i {
            transform: scale(1.1);
            filter: drop-shadow(0 2px 6px rgba(99, 102, 241, 0.3));
            color: #4f46e5 !important;
        }

        /* Ensure menu items don't overlap */
        #side-bar > div > div {
            margin-bottom: 2px;
        }

        #side-bar > div > div:last-child {
            margin-bottom: 0;
        }

        /* Child Menu Items - Enterprise Design with Professional Tree Line */
        .chiled {
            animation: slideDown 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 10px;
            margin-bottom: 14px;
            padding-left: 2.5rem !important;
            margin-left: 0;
            position: relative;
        }
        
        /* Enterprise Tree Line System - Professional Design */
        .menu-dropdown-wrapper {
            position: relative;
        }
        
        /* Professional Connection Line from Main Menu to Submenu */
        .menu-dropdown-wrapper::after {
            content: '';
            position: absolute;
            left: 1.5rem;
            top: 2.75rem;
            width: 2.5px;
            height: 0;
            background: linear-gradient(to bottom, 
                rgba(99, 102, 241, 0.45) 0%, 
                rgba(99, 102, 241, 0.4) 30%,
                rgba(99, 102, 241, 0.35) 70%,
                rgba(99, 102, 241, 0.3) 100%);
            border-radius: 2px;
            z-index: 1;
            transition: height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 0 6px rgba(99, 102, 241, 0.25),
                inset 0 0 2px rgba(99, 102, 241, 0.15);
        }
        
        .menu-parent-active::after {
            height: 10px;
            box-shadow: 
                0 0 10px rgba(99, 102, 241, 0.35),
                0 0 5px rgba(99, 102, 241, 0.25),
                inset 0 0 3px rgba(99, 102, 241, 0.2);
        }
        
        
        /* Professional Tree Line - Vertical */
        .tree-line-vertical {
            left: 1.5rem !important;
            width: 2.5px !important;
            background: linear-gradient(to bottom, 
                rgba(99, 102, 241, 0.4) 0%, 
                rgba(99, 102, 241, 0.32) 15%,
                rgba(99, 102, 241, 0.28) 50%,
                rgba(99, 102, 241, 0.32) 85%,
                rgba(99, 102, 241, 0.4) 100%) !important;
            border-radius: 2px;
            z-index: 1;
            box-shadow: 
                0 0 4px rgba(99, 102, 241, 0.15),
                inset 0 0 2px rgba(99, 102, 241, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Professional Tree Line - Horizontal */
        .tree-line-horizontal {
            left: 1.5rem !important;
            top: 0 !important;
            width: 1.25rem !important;
            height: 2.5px !important;
            background: linear-gradient(to right, 
                rgba(99, 102, 241, 0.4) 0%, 
                rgba(99, 102, 241, 0.35) 40%,
                rgba(99, 102, 241, 0.3) 70%,
                rgba(99, 102, 241, 0.25) 100%) !important;
            border-radius: 2px;
            z-index: 1;
            box-shadow: 
                0 0 4px rgba(99, 102, 241, 0.15),
                inset 0 0 2px rgba(99, 102, 241, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Enhanced tree line for active parent */
        .menu-parent-active .tree-line-vertical {
            background: linear-gradient(to bottom, 
                rgba(99, 102, 241, 0.5) 0%, 
                rgba(99, 102, 241, 0.42) 15%,
                rgba(99, 102, 241, 0.38) 50%,
                rgba(99, 102, 241, 0.42) 85%,
                rgba(99, 102, 241, 0.5) 100%) !important;
            box-shadow: 
                0 0 8px rgba(99, 102, 241, 0.3),
                0 0 4px rgba(99, 102, 241, 0.2),
                inset 0 0 3px rgba(99, 102, 241, 0.15);
            width: 3px !important;
        }
        
        .menu-parent-active .tree-line-horizontal {
            background: linear-gradient(to right, 
                rgba(99, 102, 241, 0.5) 0%, 
                rgba(99, 102, 241, 0.45) 40%,
                rgba(99, 102, 241, 0.4) 70%,
                rgba(99, 102, 241, 0.35) 100%) !important;
            box-shadow: 
                0 0 8px rgba(99, 102, 241, 0.3),
                0 0 4px rgba(99, 102, 241, 0.2),
                inset 0 0 3px rgba(99, 102, 241, 0.15);
            height: 3px !important;
            width: 1.5rem !important;
        }
        
        /* Professional Connection Point - Junction Node */
        .chiled::before {
            content: '';
            position: absolute;
            left: 1.5rem;
            top: 0;
            width: 9px;
            height: 9px;
            background: radial-gradient(circle, 
                rgba(99, 102, 241, 0.55) 0%, 
                rgba(99, 102, 241, 0.45) 40%,
                rgba(99, 102, 241, 0.35) 70%,
                rgba(99, 102, 241, 0.25) 100%);
            border: 2.5px solid rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 3;
            box-shadow: 
                0 0 10px rgba(99, 102, 241, 0.45),
                0 0 5px rgba(99, 102, 241, 0.35),
                inset 0 0 5px rgba(255, 255, 255, 0.6),
                inset 0 0 10px rgba(99, 102, 241, 0.1);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Hide connection point for empty child containers */
        .chiled:has(.menu-item-child:empty)::before,
        .chiled:has(a[class*="tw-flex"]:empty)::before,
        .chiled:has(.menu-item-child:has(span:nth-of-type(2):empty))::before {
            display: none !important;
        }
        
        .menu-parent-active .chiled::before {
            width: 11px;
            height: 11px;
            background: radial-gradient(circle, 
                rgba(99, 102, 241, 0.7) 0%, 
                rgba(99, 102, 241, 0.6) 40%,
                rgba(99, 102, 241, 0.5) 70%,
                rgba(99, 102, 241, 0.4) 100%);
            border: 3px solid rgba(255, 255, 255, 1);
            box-shadow: 
                0 0 14px rgba(99, 102, 241, 0.55),
                0 0 8px rgba(99, 102, 241, 0.45),
                0 0 4px rgba(99, 102, 241, 0.35),
                inset 0 0 8px rgba(255, 255, 255, 0.7),
                inset 0 0 12px rgba(99, 102, 241, 0.15);
        }
        
        .chiled > div:first-child {
            left: 1.5rem !important;
        }
        
        .chiled > div:last-child {
            gap: 6px;
        }
        
        /* Enhanced tree line animations */
        .menu-dropdown-wrapper:hover .tree-line-vertical,
        .menu-dropdown-wrapper:hover .tree-line-horizontal {
            opacity: 0.9;
        }
        
        .menu-parent-active:hover .tree-line-vertical,
        .menu-parent-active:hover .tree-line-horizontal {
            opacity: 1;
        }
        
        /* Smooth tree line appearance on expand */
        .chiled[style*="display: block"] .tree-line-vertical,
        .chiled[style*="display: block"] .tree-line-horizontal {
            animation: treeLineFadeIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        @keyframes treeLineFadeIn {
            from {
                opacity: 0;
                transform: scaleY(0);
            }
            to {
                opacity: 1;
                transform: scaleY(1);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Premium Active Child Menu - Modern Card Design */
        .child-menu-active {
            background: linear-gradient(135deg, 
                rgba(99, 102, 241, 0.15) 0%, 
                rgba(139, 92, 246, 0.12) 50%, 
                rgba(99, 102, 241, 0.15) 100%) !important;
            color: #4338ca !important;
            border-radius: 10px;
            padding: 11px 14px 11px 12px !important;
            position: relative;
            margin: 6px 12px 6px 0 !important;
            box-shadow: 
                0 8px 24px rgba(99, 102, 241, 0.22),
                0 4px 12px rgba(99, 102, 241, 0.16),
                0 2px 6px rgba(99, 102, 241, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(99, 102, 241, 0.1),
                0 0 0 1.5px rgba(99, 102, 241, 0.35);
            font-weight: 600;
            border: 1.5px solid rgba(99, 102, 241, 0.4) !important;
            transform: translateX(6px);
            letter-spacing: -0.01em;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Active child menu icon container - Clean Style (No Border/Background) */
        .child-menu-active > span:first-of-type {
            background: transparent !important;
            border-radius: 0;
            padding: 0;
            transform: scale(1.05);
            box-shadow: none !important;
            border: none !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .child-menu-active > span:first-of-type svg,
        .child-menu-active > span:first-of-type i {
            color: #4f46e5 !important;
            filter: drop-shadow(0 2px 4px rgba(99, 102, 241, 0.4));
            transform: scale(1.05);
        }
        
        /* Active child text styling */
        .child-menu-active > span:nth-of-type(2) {
            font-weight: 600 !important;
            color: #4338ca !important;
            letter-spacing: -0.015em;
        }

        /* Premium Active Child Menu Indicator - Enhanced Glow Effect */
        .child-menu-active:not(:empty)::before,
        .menu-item-child.child-menu-active:not(:empty)::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 85%;
            background: linear-gradient(180deg, 
                #6366f1 0%, 
                #8b5cf6 30%,
                #a78bfa 50%,
                #8b5cf6 70%,
                #6366f1 100%);
            border-radius: 0 4px 4px 0;
            box-shadow: 
                0 0 20px rgba(99, 102, 241, 0.7),
                0 0 12px rgba(99, 102, 241, 0.5),
                0 0 6px rgba(139, 92, 246, 0.4),
                inset 0 0 4px rgba(255, 255, 255, 0.3);
            z-index: 1;
            animation: activeIndicatorPulse 2s ease-in-out infinite;
        }
        
        @keyframes activeIndicatorPulse {
            0%, 100% {
                box-shadow: 
                    0 0 20px rgba(99, 102, 241, 0.7),
                    0 0 12px rgba(99, 102, 241, 0.5),
                    0 0 6px rgba(139, 92, 246, 0.4);
            }
            50% {
                box-shadow: 
                    0 0 24px rgba(99, 102, 241, 0.8),
                    0 0 16px rgba(99, 102, 241, 0.6),
                    0 0 8px rgba(139, 92, 246, 0.5);
            }
        }
        
        /* Disable pulse animation for users who prefer reduced motion */
        @media (prefers-reduced-motion: reduce) {
            .child-menu-active::before {
                animation: none !important;
            }
        }
        
        /* Hide active indicator for empty items */
        .child-menu-active:empty::before,
        .menu-item-child.child-menu-active:empty::before {
            display: none !important;
        }

        /* Active Child Item - Professional */
        .active-child-item {
            opacity: 1 !important;
            color: #4f46e5 !important;
            font-weight: 600;
        }

        .active-child-item span {
            opacity: 1 !important;
            color: #4f46e5 !important;
        }
        
        .active-child-item svg,
        .active-child-item i {
            color: #4f46e5 !important;
            filter: drop-shadow(0 2px 4px rgba(99, 102, 241, 0.3));
        }

        /* Premium Child Menu Links - Modern Card Design */
        .chiled a[class*="tw-flex"],
        .menu-item-child {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 10px;
            margin: 6px 12px 6px 0 !important;
            padding: 11px 14px 11px 12px !important;
            position: relative;
            width: calc(100% - 12px);
            display: flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.9) 0%, 
                rgba(250, 251, 252, 0.85) 100%);
            border: 1px solid rgba(0, 0, 0, 0.06);
            color: #475569;
            font-weight: 500;
            letter-spacing: -0.01em;
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.05),
                0 1px 3px rgba(0, 0, 0, 0.03),
                inset 0 1px 0 rgba(255, 255, 255, 0.8),
                0 0 0 0 rgba(99, 102, 241, 0);
            min-height: 2.75rem;
            font-size: 14px !important;
            line-height: 1.5;
            margin-left: 0 !important;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        /* Premium Child Menu Hover State */
        .menu-item-child:hover:not(.child-menu-active),
        .chiled a[class*="tw-flex"]:hover:not(.child-menu-active) {
            background: linear-gradient(135deg, 
                rgba(99, 102, 241, 0.1) 0%, 
                rgba(139, 92, 246, 0.08) 100%) !important;
            color: #4338ca !important;
            transform: translateX(4px);
            border-color: rgba(99, 102, 241, 0.25) !important;
            box-shadow: 
                0 6px 20px rgba(99, 102, 241, 0.15),
                0 3px 10px rgba(99, 102, 241, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.9),
                0 0 0 1px rgba(99, 102, 241, 0.2);
            font-weight: 600;
        }
        
        /* Child Menu Icon Container - Clean Style (No Border/Background) */
        .menu-item-child > span:first-of-type,
        .chiled a[class*="tw-flex"] > span:first-of-type {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent !important;
            border-radius: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none !important;
            box-shadow: none !important;
        }
        
        .menu-item-child:hover > span:first-of-type,
        .chiled a[class*="tw-flex"]:hover > span:first-of-type {
            background: transparent !important;
            transform: scale(1.05);
            border: none !important;
            box-shadow: none !important;
        }
        
        /* Child Menu Icon Styling */
        .menu-item-child > span:first-of-type svg,
        .menu-item-child > span:first-of-type i,
        .chiled a[class*="tw-flex"] > span:first-of-type svg,
        .chiled a[class*="tw-flex"] > span:first-of-type i {
            width: 18px;
            height: 18px;
            color: #64748b;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .menu-item-child:hover > span:first-of-type svg,
        .menu-item-child:hover > span:first-of-type i,
        .chiled a[class*="tw-flex"]:hover > span:first-of-type svg,
        .chiled a[class*="tw-flex"]:hover > span:first-of-type i {
            color: #6366f1;
            transform: scale(1.05);
            filter: drop-shadow(0 2px 4px rgba(99, 102, 241, 0.25));
        }
        
        /* Child Menu Text Styling */
        .menu-item-child > span:nth-of-type(2),
        .chiled a[class*="tw-flex"] > span:nth-of-type(2) {
            flex: 1;
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            transition: color 0.3s ease, font-weight 0.3s ease;
        }
        
        .menu-item-child:hover > span:nth-of-type(2),
        .chiled a[class*="tw-flex"]:hover > span:nth-of-type(2) {
            color: #4338ca !important;
        }
        
        /* Hide empty child menu items - prevent blank spaces with active indicators */
        .menu-item-child:empty,
        .chiled a[class*="tw-flex"]:empty {
            display: none !important;
            visibility: hidden !important;
            height: 0 !important;
            min-height: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        
        /* Hide child items that have no visible text content (fallback for browsers without :has support) */
        .menu-item-child span:nth-of-type(2):empty,
        .chiled a[class*="tw-flex"] span:nth-of-type(2):empty {
            display: none;
        }
        
        /* Hide items where text span is empty or only whitespace */
        .menu-item-child:has(span:nth-of-type(2):empty),
        .chiled a[class*="tw-flex"]:has(span:nth-of-type(2):empty) {
            display: none !important;
        }
        
        /* Ensure child menu items have content before showing active indicator */
        .menu-item-child:empty::before,
        .chiled a[class*="tw-flex"]:empty::before,
        .menu-item-child:empty::after,
        .chiled a[class*="tw-flex"]:empty::after {
            display: none !important;
        }
        
        /* Hide active indicators for items without proper content */
        .menu-item-child:has(span:nth-of-type(2):empty)::before,
        .chiled a[class*="tw-flex"]:has(span:nth-of-type(2):empty)::before {
            display: none !important;
        }
        
        /* Ensure all child menu items have consistent font size */
        .menu-item-child,
        .menu-item-child * {
            font-size: 14px !important;
        }
        
        .menu-item-child > span:nth-of-type(2) {
            font-size: 14px !important;
            font-weight: 500 !important;
            color: #475569;
        }
        
        /* Premium Child Menu Active Text */
        .child-menu-active > span:nth-of-type(2) {
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #4338ca !important;
        }

        /* Premium Hover Indicator for Child Menu */
        .chiled a[class*="tw-flex"]::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%) scaleX(0);
            width: 3px;
            height: 0;
            background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 50%, #6366f1 100%);
            border-radius: 0 3px 3px 0;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 0 12px rgba(99, 102, 241, 0.6),
                0 0 6px rgba(99, 102, 241, 0.4);
            z-index: 1;
        }

        /* Enhanced hover state already defined above - keeping for compatibility */
        .chiled a[class*="tw-flex"]:hover:not(.child-menu-active) {
            background: linear-gradient(135deg, 
                rgba(99, 102, 241, 0.1) 0%, 
                rgba(139, 92, 246, 0.08) 100%) !important;
            color: #4338ca !important;
            transform: translateX(4px);
            box-shadow: 
                0 6px 20px rgba(99, 102, 241, 0.15),
                0 3px 10px rgba(99, 102, 241, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.9),
                0 0 0 1px rgba(99, 102, 241, 0.2);
            border-color: rgba(99, 102, 241, 0.25) !important;
            font-weight: 600;
        }

        .chiled a[class*="tw-flex"] > span:last-of-type {
            flex: 1;
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
        }

        /* Premium Hover Indicator Animation */
        .chiled a[class*="tw-flex"]:hover::before {
            transform: translateY(-50%) scaleX(1);
            height: 75%;
            box-shadow: 
                0 0 14px rgba(99, 102, 241, 0.7),
                0 0 8px rgba(99, 102, 241, 0.5),
                0 0 4px rgba(139, 92, 246, 0.4);
        }

        .chiled .child-menu-active::before {
            transform: translateY(-50%) scaleX(1);
            height: 75%;
            box-shadow: 
                0 0 15px rgba(99, 102, 241, 0.6),
                0 0 8px rgba(99, 102, 241, 0.4);
        }
        
        /* Enhanced submenu icon styling */
        .chiled a[class*="tw-flex"] > span:first-of-type {
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .chiled a[class*="tw-flex"]:hover > span:first-of-type {
            transform: scale(1.1);
        }
        
        .chiled a[class*="tw-flex"]:hover > span:first-of-type svg,
        .chiled a[class*="tw-flex"]:hover > span:first-of-type i {
            color: #6366f1;
            filter: drop-shadow(0 2px 4px rgba(99, 102, 241, 0.3));
        }

        /* Enterprise Scrollbar - Webkit Browsers */
        #side-bar::-webkit-scrollbar {
            width: 6px;
        }

        #side-bar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.02);
            border-radius: 10px;
            margin: 12px 0;
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        #side-bar::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, rgba(99, 102, 241, 0.35) 0%, rgba(139, 92, 246, 0.3) 100%);
            border-radius: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
        }

        #side-bar::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, rgba(99, 102, 241, 0.55) 0%, rgba(139, 92, 246, 0.5) 100%);
            box-shadow: 
                0 0 10px rgba(99, 102, 241, 0.35),
                inset 0 0 2px rgba(0, 0, 0, 0.15);
        }

        /* Firefox Scrollbar Fallback */
        #side-bar {
            scrollbar-width: thin;
            scrollbar-color: rgba(99, 102, 241, 0.4) rgba(0, 0, 0, 0.05);
        }

        /* Header Wrapper - Enterprise Design */
        #side-bar > div > div[class*="tw-px-3"] {
            color: #64748b;
            font-weight: 700;
            letter-spacing: 1.1px;
            margin: 24px 0 16px 0;
            padding: 14px 18px;
            text-transform: uppercase;
            font-size: 10.5px !important;
            position: relative;
            background: 
                linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(250, 251, 252, 0.75) 100%);
            border-radius: 8px;
            margin-left: 10px;
            margin-right: 10px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 
                0 2px 4px rgba(0, 0, 0, 0.04),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            line-height: 1.4;
        }

        #side-bar > div > div[class*="tw-px-3"]::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 12px;
            right: 12px;
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, rgba(99, 102, 241, 0.3) 50%, transparent 100%);
            border-radius: 1px;
        }

        /* Divider - White Theme */
        #side-bar > div > div[class*="tw-my-2"] {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, rgba(0, 0, 0, 0.08) 50%, transparent 100%);
            margin: 12px 12px;
        }

        /* Smooth Transitions */
        * {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Pulse animation for active items - White Theme */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
            }
            50% {
                box-shadow: 0 0 30px rgba(99, 102, 241, 0.5);
            }
        }

        .custom-hover.active-menu-item::before {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        /* Icon bounce animation on hover */
        @keyframes icon-bounce {
            0%, 100% {
                transform: scale(1.2) rotate(5deg);
            }
            50% {
                transform: scale(1.25) rotate(7deg);
            }
        }

        .custom-hover:hover svg,
        .custom-hover:hover i {
            animation: icon-bounce 0.6s ease-in-out;
        }

        /* Smooth text fade */
        .custom-hover > span:nth-of-type(2) {
            transition: color 0.4s ease, opacity 0.4s ease;
        }

        /* Enhanced backdrop blur effect */
        .custom-hover {
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
        }

        /* Accessibility: Focus States for Keyboard Navigation */
        .custom-hover:focus,
        .drop_down:focus,
        .menu-item-child:focus {
            outline: 2px solid rgba(99, 102, 241, 0.6) !important;
            outline-offset: 2px !important;
            box-shadow: 
                0 0 0 4px rgba(99, 102, 241, 0.2),
                0 4px 16px rgba(99, 102, 241, 0.15) !important;
        }

        .custom-hover:focus:not(.active-menu-item) {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.12) 0%, rgba(139, 92, 246, 0.1) 100%) !important;
        }

        /* Reduce Motion for Users with Motion Sensitivity */
        @media (prefers-reduced-motion: reduce) {
            .custom-hover,
            .drop_down,
            .menu-item-child,
            .modern-sidebar,
            .sidebar-logo-container,
            .chiled {
                transition: none !important;
                animation: none !important;
            }
            
            .custom-hover:hover svg,
            .custom-hover:hover i {
                animation: none !important;
            }
        }

        /* Safe Area Insets for Devices with Notches */
        @supports (padding: max(0px)) {
            .modern-sidebar {
                padding-top: max(0px, env(safe-area-inset-top));
                padding-bottom: max(0px, env(safe-area-inset-bottom));
                padding-left: max(0px, env(safe-area-inset-left));
            }
        }

        /* Main Content Offset for Fixed Sidebar - 300px */
        @media (min-width: 1024px) {
            body:not(.sidebar-collapse) main {
                margin-left: 300px !important;
                width: calc(100% - 300px) !important;
                transition: margin-left 0.35s cubic-bezier(0.4, 0, 0.2, 1), 
                           width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            }
            body.sidebar-collapse main {
                margin-left: 80px !important;
                width: calc(100% - 80px) !important;
                transition: margin-left 0.35s cubic-bezier(0.4, 0, 0.2, 1), 
                           width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            }
        }

        /* Ensure sidebar is always 300px on large screens */
        @media (min-width: 1024px) {
            .modern-sidebar {
                width: 300px !important;
                transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1), 
                           transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            /* ============================================
               COLLAPSED SIDEBAR - PREMIUM ICON-ONLY DESIGN
               ============================================ */
            
            /* Collapsed state - Modern icon-only sidebar */
            body.sidebar-collapse .modern-sidebar {
                width: 80px !important;
                transform: translateX(0) !important;
                opacity: 1;
                pointer-events: auto;
                visibility: visible;
            }
            
            /* Collapsed Logo Container */
            body.sidebar-collapse .sidebar-logo-container {
                padding: 16px 12px;
                justify-content: center;
                align-items: center;
                min-height: 80px;
                height: 80px;
            }
            
            body.sidebar-collapse .sidebar-logo {
                max-width: 48px;
                max-height: 48px;
            }
            
            /* Hide all text labels when collapsed */
            body.sidebar-collapse .custom-hover > span:nth-of-type(2),
            body.sidebar-collapse .drop_down > span:nth-of-type(2),
            body.sidebar-collapse .menu-item-child > span:nth-of-type(2),
            body.sidebar-collapse .chiled a[class*="tw-flex"] > span:nth-of-type(2) {
                display: none !important;
                opacity: 0 !important;
            }
            
            /* Hide dropdown arrows when collapsed */
            body.sidebar-collapse .drop_down .svg {
                display: none !important;
            }
            
            /* Hide menu headers when collapsed */
            body.sidebar-collapse #side-bar > div > div[class*="tw-px-3"] {
                display: none !important;
            }
            
            /* Hide dividers when collapsed */
            body.sidebar-collapse #side-bar > div > div[class*="tw-my-2"] {
                display: none !important;
            }
            
            /* Premium Menu Items - Collapsed State - Icon Only */
            body.sidebar-collapse .custom-hover,
            body.sidebar-collapse .drop_down {
                justify-content: center !important;
                align-items: center !important;
                padding: 14px 8px !important;
                margin: 6px 8px !important;
                width: calc(100% - 16px) !important;
                min-height: 56px !important;
                height: 56px !important;
                gap: 0 !important;
                border-radius: 12px !important;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                position: relative;
            }
            
            /* Premium Icon Container - Collapsed - Perfect Centering */
            body.sidebar-collapse .custom-hover > span:first-of-type,
            body.sidebar-collapse .drop_down > span:first-of-type {
                display: flex !important;
                width: 32px !important;
                height: 32px !important;
                margin: 0 auto !important;
                flex-shrink: 0 !important;
                align-items: center !important;
                justify-content: center !important;
                background: transparent;
            }
            
            /* Premium Icons - Collapsed - Perfect Rendering */
            body.sidebar-collapse .custom-hover > span:first-of-type svg,
            body.sidebar-collapse .custom-hover > span:first-of-type i,
            body.sidebar-collapse .drop_down > span:first-of-type svg,
            body.sidebar-collapse .drop_down > span:first-of-type i {
                width: 24px !important;
                height: 24px !important;
                min-width: 24px !important;
                min-height: 24px !important;
                max-width: 24px !important;
                max-height: 24px !important;
                color: #64748b !important;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            /* Hide left indicator bar when collapsed */
            body.sidebar-collapse .custom-hover::before,
            body.sidebar-collapse .drop_down::before,
            body.sidebar-collapse .custom-hover.active-menu-item::before,
            body.sidebar-collapse .drop_down.active-menu-item::before {
                display: none !important;
            }
            
            /* Premium Hover State - Collapsed */
            body.sidebar-collapse .custom-hover:hover:not(.active-menu-item),
            body.sidebar-collapse .drop_down:hover:not(.active-menu-item) {
                background: linear-gradient(135deg, 
                    rgba(99, 102, 241, 0.12) 0%, 
                    rgba(139, 92, 246, 0.1) 100%) !important;
                transform: scale(1.05);
                box-shadow: 
                    0 6px 16px rgba(99, 102, 241, 0.15),
                    0 3px 8px rgba(99, 102, 241, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.95);
            }
            
            body.sidebar-collapse .custom-hover:hover > span:first-of-type svg,
            body.sidebar-collapse .custom-hover:hover > span:first-of-type i,
            body.sidebar-collapse .drop_down:hover > span:first-of-type svg,
            body.sidebar-collapse .drop_down:hover > span:first-of-type i {
                color: #6366f1 !important;
                transform: scale(1.1);
            }
            
            /* Premium Active State - Collapsed */
            body.sidebar-collapse .custom-hover.active-menu-item,
            body.sidebar-collapse .drop_down.active-menu-item {
                background: linear-gradient(135deg, 
                    rgba(99, 102, 241, 0.18) 0%, 
                    rgba(139, 92, 246, 0.15) 50%, 
                    rgba(99, 102, 241, 0.18) 100%) !important;
                transform: scale(1.05);
                box-shadow: 
                    0 8px 24px rgba(99, 102, 241, 0.25),
                    0 4px 12px rgba(99, 102, 241, 0.2),
                    inset 0 1px 0 rgba(255, 255, 255, 0.95);
            }
            
            body.sidebar-collapse .custom-hover.active-menu-item > span:first-of-type svg,
            body.sidebar-collapse .custom-hover.active-menu-item > span:first-of-type i,
            body.sidebar-collapse .drop_down.active-menu-item > span:first-of-type svg,
            body.sidebar-collapse .drop_down.active-menu-item > span:first-of-type i {
                color: #4f46e5 !important;
                transform: scale(1.15);
            }
            
            /* Premium Tooltip - Collapsed Sidebar */
            body.sidebar-collapse .custom-hover[title]:hover::after,
            body.sidebar-collapse .drop_down[title]:hover::after {
                content: attr(title);
                position: absolute;
                left: calc(100% + 16px);
                top: 50%;
                transform: translateY(-50%);
                background: linear-gradient(135deg, 
                    rgba(15, 23, 42, 0.98) 0%, 
                    rgba(30, 41, 59, 0.96) 100%);
                color: white;
                padding: 10px 14px;
                border-radius: 10px;
                font-size: 13px;
                font-weight: 500;
                white-space: nowrap;
                z-index: 10000;
                pointer-events: none;
                box-shadow: 
                    0 8px 24px rgba(0, 0, 0, 0.2),
                    0 4px 12px rgba(0, 0, 0, 0.15),
                    0 0 0 1px rgba(255, 255, 255, 0.1);
                opacity: 0;
                animation: tooltipFadeIn 0.25s ease-out 0.4s forwards;
                letter-spacing: -0.01em;
            }
            
            body.sidebar-collapse .custom-hover[title]:hover::before,
            body.sidebar-collapse .drop_down[title]:hover::before {
                content: '';
                position: absolute;
                left: calc(100% + 10px);
                top: 50%;
                transform: translateY(-50%) rotate(45deg);
                width: 10px;
                height: 10px;
                background: linear-gradient(135deg, 
                    rgba(15, 23, 42, 0.98) 0%, 
                    rgba(30, 41, 59, 0.96) 100%);
                z-index: 10001;
                pointer-events: none;
                box-shadow: 2px -2px 4px rgba(0, 0, 0, 0.1);
            }
            
            @keyframes tooltipFadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-50%) translateX(-4px);
                }
                to {
                    opacity: 1;
                    transform: translateY(-50%) translateX(0);
                }
            }
            
            /* Dropdown Indicator - Collapsed Sidebar */
            body.sidebar-collapse .menu-dropdown-wrapper::after {
                content: '';
                position: absolute;
                right: 8px;
                top: 50%;
                transform: translateY(-50%);
                width: 6px;
                height: 6px;
                background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
                border-radius: 50%;
                box-shadow: 
                    0 0 12px rgba(99, 102, 241, 0.7),
                    0 0 6px rgba(99, 102, 241, 0.5);
                opacity: 0.6;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 10;
                pointer-events: none;
            }
            
            body.sidebar-collapse .menu-dropdown-wrapper:hover::after {
                opacity: 1;
                transform: translateY(-50%) scale(1.3);
                width: 7px;
                height: 7px;
                box-shadow: 
                    0 0 20px rgba(99, 102, 241, 0.9),
                    0 0 10px rgba(99, 102, 241, 0.7);
            }
            
            body.sidebar-collapse .menu-parent-active::after {
                opacity: 1;
                background: linear-gradient(135deg, #4f46e5 0%, #6366f1 50%, #8b5cf6 100%);
                width: 7px;
                height: 7px;
                box-shadow: 
                    0 0 20px rgba(99, 102, 241, 1),
                    0 0 12px rgba(99, 102, 241, 0.8);
            }
            
            /* Hide child menus when collapsed (or show as flyout on hover) */
            body.sidebar-collapse .chiled {
                display: none !important;
            }
            
            /* Premium Flyout Menu - Show on Parent Hover */
            body.sidebar-collapse .menu-dropdown-wrapper {
                position: relative;
            }
            
            body.sidebar-collapse .menu-dropdown-wrapper:hover .chiled,
            body.sidebar-collapse .menu-parent-active .chiled {
                display: block !important;
                position: absolute;
                left: calc(100% + 8px);
                top: 0;
                width: 260px;
                background: linear-gradient(180deg, 
                    rgba(255, 255, 255, 0.99) 0%, 
                    rgba(250, 251, 252, 0.97) 100%);
                backdrop-filter: blur(24px);
                -webkit-backdrop-filter: blur(24px);
                border-radius: 16px;
                box-shadow: 
                    0 20px 60px rgba(0, 0, 0, 0.12),
                    0 8px 24px rgba(0, 0, 0, 0.08),
                    0 0 0 1px rgba(0, 0, 0, 0.04);
                padding: 14px 10px;
                z-index: 9999;
                margin: 0;
                animation: flyoutSlideIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                max-height: calc(100vh - 120px);
                overflow-y: auto;
            }
            
            @keyframes flyoutSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            /* Flyout menu items */
            body.sidebar-collapse .chiled .menu-item-child,
            body.sidebar-collapse .chiled a[class*="tw-flex"] {
                margin: 4px 8px !important;
                padding: 10px 14px !important;
                width: calc(100% - 16px) !important;
                display: flex !important;
                align-items: center;
                gap: 10px;
                border-radius: 8px;
                transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            /* Flyout menu item hover */
            body.sidebar-collapse .chiled .menu-item-child:hover,
            body.sidebar-collapse .chiled a[class*="tw-flex"]:hover {
                background: linear-gradient(135deg, 
                    rgba(99, 102, 241, 0.1) 0%, 
                    rgba(139, 92, 246, 0.08) 100%) !important;
                color: #4338ca !important;
                transform: translateX(2px);
            }
            
            /* Flyout active child menu */
            body.sidebar-collapse .chiled .child-menu-active {
                background: linear-gradient(135deg, 
                    rgba(99, 102, 241, 0.15) 0%, 
                    rgba(139, 92, 246, 0.12) 50%, 
                    rgba(99, 102, 241, 0.15) 100%) !important;
                color: #4338ca !important;
                font-weight: 600;
            }
            
            /* Show text in flyout menu */
            body.sidebar-collapse .chiled .menu-item-child > span:nth-of-type(2),
            body.sidebar-collapse .chiled a[class*="tw-flex"] > span:nth-of-type(2) {
                display: block !important;
                opacity: 1 !important;
                flex: 1;
            }
            
            /* Hide tree lines in flyout */
            body.sidebar-collapse .chiled .tree-line-vertical,
            body.sidebar-collapse .chiled .tree-line-horizontal {
                display: none !important;
            }
            
            /* Flyout arrow connector - override connection point */
            body.sidebar-collapse .chiled::before {
                content: '' !important;
                position: absolute !important;
                left: -10px !important;
                top: 24px !important;
                width: 0 !important;
                height: 0 !important;
                border-style: solid !important;
                border-width: 10px 10px 10px 0 !important;
                border-color: transparent rgba(255, 255, 255, 0.99) transparent transparent !important;
                filter: drop-shadow(-3px 0 3px rgba(0, 0, 0, 0.08)) !important;
                background: none !important;
                border-radius: 0 !important;
                transform: none !important;
                box-shadow: none !important;
                z-index: 10000 !important;
            }
            
            /* Flyout scrollbar */
            body.sidebar-collapse .chiled::-webkit-scrollbar {
                width: 6px;
            }
            
            body.sidebar-collapse .chiled::-webkit-scrollbar-thumb {
                background: linear-gradient(180deg, rgba(99, 102, 241, 0.4) 0%, rgba(139, 92, 246, 0.35) 100%);
                border-radius: 10px;
            }
            
            body.sidebar-collapse .chiled {
                scrollbar-width: thin;
                scrollbar-color: rgba(99, 102, 241, 0.4) rgba(0, 0, 0, 0.05);
            }
            
            /* Enhanced collapsed sidebar scrollbar */
            body.sidebar-collapse #side-bar::-webkit-scrollbar {
                width: 4px;
            }
            
            body.sidebar-collapse #side-bar::-webkit-scrollbar-thumb {
                background: linear-gradient(180deg, rgba(99, 102, 241, 0.4) 0%, rgba(139, 92, 246, 0.35) 100%);
                border-radius: 10px;
            }
            
            body.sidebar-collapse #side-bar {
                scrollbar-width: thin;
                scrollbar-color: rgba(99, 102, 241, 0.4) rgba(0, 0, 0, 0.05);
            }
            
            /* Show sidebar when not collapsed */
            body:not(.sidebar-collapse) .modern-sidebar {
                transform: translateX(0) !important;
                opacity: 1;
                pointer-events: auto;
                visibility: visible;
            }
        }

        /* Tablet Breakpoint (768px - 1023px) */
        @media (min-width: 768px) and (max-width: 1023px) {
            .modern-sidebar {
                width: 280px !important;
                box-shadow: 4px 0 24px rgba(0, 0, 0, 0.12);
            }
            
            body:not(.sidebar-collapse) main {
                margin-left: 280px !important;
                width: calc(100% - 280px) !important;
            }
            
            /* Ensure touch targets are adequate */
            .custom-hover,
            .drop_down {
                min-height: 44px !important;
                height: 2.75rem !important;
            }
            
            .custom-hover.active-menu-item {
                min-height: 44px !important;
                height: 2.75rem !important;
                padding: 0.5rem 0.75rem !important;
            }
        }

        /* Mobile Responsive Adjustments (max-width: 767px) */
        @media (max-width: 767px) {
            .modern-sidebar {
                box-shadow: 4px 0 30px rgba(0, 0, 0, 0.5);
                width: min(85vw, 300px) !important;
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            body:not(.sidebar-collapse) main {
                margin-left: 0 !important;
                width: 100% !important;
            }
            
            /* On mobile, hide sidebar by default, show when active */
            .modern-sidebar:not(.small-view-side-active) {
                transform: translateX(-100%) !important;
            }
            
            .modern-sidebar.small-view-side-active {
                transform: translateX(0) !important;
            }
            
            /* Optimize touch targets for mobile */
            .custom-hover,
            .drop_down,
            .menu-item-child {
                min-height: 48px !important;
                height: 3rem !important;
                padding: 0.75rem 1rem !important;
                margin: 6px 12px !important;
            }
            
            .custom-hover.active-menu-item {
                min-height: 48px !important;
                height: 3rem !important;
                padding: 0.75rem 1rem !important;
            }
            
            /* Larger text on mobile for readability */
            .custom-hover,
            .drop_down {
                font-size: 16px !important;
            }
            
            .menu-item-child {
                font-size: 15px !important;
            }
            
            /* Adjust logo for mobile */
            .sidebar-logo-container {
                height: 70px;
            }
            
            .sidebar-logo {
                max-width: 200px;
                max-height: 60px;
            }
            
            /* Better scrollbar visibility on mobile */
            #side-bar::-webkit-scrollbar {
                width: 8px;
            }
        }
        
        /* Landscape Mobile Orientation */
        @media (max-width: 767px) and (orientation: landscape) {
            .modern-sidebar {
                width: min(70vw, 280px) !important;
            }
            
            .sidebar-logo-container {
                height: 60px;
            }
            
            .sidebar-logo {
                max-width: 180px;
                max-height: 50px;
            }
            
            /* Slightly smaller menu items in landscape */
            .custom-hover,
            .drop_down {
                min-height: 44px !important;
                height: 2.75rem !important;
                padding: 0.625rem 1rem !important;
            }
        }
        
        /* Large Desktop Screens (1440px+) */
        @media (min-width: 1440px) {
            .modern-sidebar {
                width: 320px !important;
            }
            
            body:not(.sidebar-collapse) main {
                margin-left: 320px !important;
                width: calc(100% - 320px) !important;
            }
        }

        /* Legacy: Keep old breakpoint for backward compatibility */
        @media (max-width: 1024px) {
            .modern-sidebar {
                box-shadow: 4px 0 30px rgba(0, 0, 0, 0.5);
            }
            
            body:not(.sidebar-collapse) main {
                margin-left: 0 !important;
                width: 100% !important;
            }
            
            /* On mobile/tablet, hide sidebar by default, show when active */
            .modern-sidebar:not(.small-view-side-active) {
                transform: translateX(-100%) !important;
            }
            
            .modern-sidebar.small-view-side-active {
                transform: translateX(0) !important;
            }
        }
    </style>
    {!! Menu::render('admin-sidebar-menu', 'adminltecustom') !!}

    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>

