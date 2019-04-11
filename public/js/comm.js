var Sticky = new hcSticky('aside', {
    stickTo: 'main',
    innerTop: 200,
    followScroll: false,
    queries: {
        480: {
            disable: true,
            stickTo: 'body'
        }
    }
});