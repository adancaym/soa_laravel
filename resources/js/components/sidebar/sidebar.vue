<template>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="nav-icon icon-speedometer"></i> Dashboard
                        <span class="badge badge-primary">NEW</span>
                    </a>
                </li>
                <li class="nav-title d-lg-none d-xl-block">Menu</li>
                <li class="nav-item d-lg-none d-xl-block">
                    <a class="nav-link" href="colors.html">
                        <i class="nav-icon icon-drop"></i> Colors</a>
                </li>
                <li class="nav-item d-lg-none d-xl-block">
                    <a class="nav-link" href="typography.html">
                        <i class="nav-icon icon-pencil"></i> Typography</a>
                </li>

                <li class="nav-title">Components</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-puzzle"></i> Base</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="base/breadcrumb.html">
                                <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/cards.html">
                                <i class="nav-icon icon-puzzle"></i> Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/carousel.html">
                                <i class="nav-icon icon-puzzle"></i> Carousel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/collapse.html">
                                <i class="nav-icon icon-puzzle"></i> Collapse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/forms.html">
                                <i class="nav-icon icon-puzzle"></i> Forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/jumbotron.html">
                                <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/list-group.html">
                                <i class="nav-icon icon-puzzle"></i> List group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/navs.html">
                                <i class="nav-icon icon-puzzle"></i> Navs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/pagination.html">
                                <i class="nav-icon icon-puzzle"></i> Pagination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/popovers.html">
                                <i class="nav-icon icon-puzzle"></i> Popovers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/progress.html">
                                <i class="nav-icon icon-puzzle"></i> Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/scrollspy.html">
                                <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/switches.html">
                                <i class="nav-icon icon-puzzle"></i> Switches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tables.html">
                                <i class="nav-icon icon-puzzle"></i> Tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tabs.html">
                                <i class="nav-icon icon-puzzle"></i> Tabs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tooltips.html">
                                <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
</template>

<script>
    export default {

        mounted() {
            axios.get('host').then(response=>{
                this.title = response.data.host.title_page;
                this.links = response.data.links;
            });
		},
		data(){
			return {
                    title:'',
                    links:[]
			}
		}
    }
</script>
