<style>
.main-nav-tabss{
    display: flex;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    justify-content: flex-start;
    font-family: Roboto;
    border-bottom: none;
    overflow-x: auto;
}
.main-tab-item{
    margin-right: 15px;
}
.main-tab-link{
    display: inline-block;
    transition: all 0.3s ease-in-out;
    color: #000 !important;
    margin-bottom: 20px;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
        padding: 0px 20px;
    white-space: nowrap;
}
.main-tab-link.active {
    color: #ff0093 !important;
    position: relative;
}
.main-tab-link.active::before {
    content: '';
    width: 50px;
    height: 2px;
    background: #ff0093;
    display: block;
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
}
@media screen and (max-width: 767px){
.main-nav-tabss {
    flex-wrap: nowrap;
    justify-content: flex-start;
    overflow-x: auto;
    margin-bottom: 10px;
    border-bottom: none;
}
.main-tab-link{
    white-space: nowrap;
    margin-bottom: 6px;
    padding: 5px 50px;
    font-size: 13px;
    font-weight: 600 !important;
}
.main-nav-tabss::-webkit-scrollbar {
  /*width: 2px;*/
  /*height: 3px;*/
}
.main-nav-tabss::-webkit-scrollbar-track {
  /*background: transparent;*/
  /*border-radius: 10px;*/
}
.main-nav-tabss::-webkit-scrollbar-thumb {
  /*background: transparent;*/
}
.main-nav-tabss::-webkit-scrollbar-thumb:hover {
  /*background: transparent;*/
}
}
</style>

<ul class="nav nav-tabs main-nav-tabss mt-4">
    <li class="main-tab-item">
        <a class="main-tab-link active" href="projects-list">market</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="crypto-exchange">stock price</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="songs">songs</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="videos">videos</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="followers">followers</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="contacts-profile">Profile</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="photos">photos</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="revenue-streams">revenue</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="crypto-wallet">bank</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="tasks-kanban">collaborate</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="#invite">invite</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="songs">promote</a>
    </li>
    
    <li class="main-tab-item">
    <a class="main-tab-link" href="ecommerce-products">store</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="artist-pricing">subscriptions</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="artist-pricing">investment deal</a>
    </li>
    
    <li class="main-tab-item">
        <a class="main-tab-link" href="#academy">academy</a>
    </li>
    <li class="main-tab-item">
        <a class="main-tab-link" href="contacts-profile">dashboard</a>
    </li>

</ul>