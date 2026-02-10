function toChat ()
{
    const largeScreen = window.innerWidth >= 768;
    if ( !largeScreen )
    {
        const isInLarge = window.location.href.includes( 'large' );
        if ( !isInLarge )        {window.open( '../Chats/chats.html', '_self' )}
    } else
    {
        window.open( '../Large-screen/large-chats.html', '_self' )
    }
}


function openStory(storyURL) {
  window.open("../story/story.html", "_blank");
}
