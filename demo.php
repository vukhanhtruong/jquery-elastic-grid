<?php
$filterEffect = (isset($_GET['filterEffect'])) ? $_GET['filterEffect'] : 'popup';
$hoverDirection = (isset($_GET['hoverDirection'])) ? (bool)$_GET['hoverDirection'] : true;
$hoverInverse = (isset($_GET['hoverInverse'])) ? (bool)$_GET['hoverInverse'] : false;
$hoverDelay = (isset($_GET['hoverDelay'])) ? intval($_GET['hoverDelay']) : 0;
$expandingSpeed = (isset($_GET['expandingSpeed'])) ? intval($_GET['expandingSpeed']) : 500;
?>
<div id="elastic_grid"></div>
<script type="text/javascript">
	$(function(){
        $("#elastic_grid").elastic_grid({
        	'filterEffect': '<?php echo $filterEffect;?>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
        	'hoverDirection': '<?php echo $hoverDirection;?>',
        	'hoverDelay': <?php echo $hoverDelay;?>,
        	'hoverInverse': '<?php echo $hoverInverse;?>',
            'expandingSpeed': <?php echo $expandingSpeed;?>,
            'expandingHeight': 500,
        	'items' :
        	[
        		{
        			'title' 		: 'Azuki bean',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/1.jpg', 'images/small/2.jpg', 'images/small/3.jpg', 'images/small/10.jpg', 'images/small/11.jpg'],
        			'large' 		: ['images/large/1.jpg', 'images/large/2.jpg', 'images/large/3.jpg', 'images/large/10.jpg', 'images/large/11.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait']
        		},
        		{
        			'title' 		: 'Swiss chard pumpkin',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/4.jpg', 'images/small/5.jpg', 'images/small/6.jpg', 'images/small/7.jpg'],
        			'large' 		: ['images/large/4.jpg', 'images/large/5.jpg', 'images/large/6.jpg', 'images/large/7.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Landscape']
        		},
        		{
        			'title' 		: 'Spinach winter purslane',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/15.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/15.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait', 'Landscape']
        		},
        		{
        			'title' 		: 'Aubergine napa cabbage',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/12.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
        			'large' 		: ['images/large/12.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait']
        		},
        		{
        			'title' 		: 'Bbunya chard pumpkin',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/17.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
        			'large' 		: ['images/large/17.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Landscape']
        		},
        		{
        			'title' 		: 'Soko coriander sweet',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/13.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/13.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Vintage']
        		},
        		{
        			'title' 		: 'Plantain aubergine',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/7.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/7.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait']
        		},
        		{
        			'title' 		: 'Maize plantain',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/16.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
        			'large' 		: ['images/large/16.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Vintage']
        		},
        		{
        			'title' 		: 'Swiss bunya nuts',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/18.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
        			'large' 		: ['images/large/18.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Landscape']
        		},
        		{
        			'title' 		: 'Winter chard pumpkin bunya',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/11.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/11.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait']
        		},
        		{
        			'title' 		: 'Napa cabbage soko',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/3.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/3.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Vintage']
        		},
        		{
        			'title' 		: 'Water maize',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/5.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/5.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Portrait', 'Landscape']
        		},
        		{
        			'title' 		: 'Bean aubergine',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/6.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
        			'large' 		: ['images/large/6.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Vintage']
        		},
        		{
        			'title' 		: 'Chard napa',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/8.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
        			'large' 		: ['images/large/8.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Landscape']
        		},
        		{
        			'title' 		: 'Purslane sweet',
        			'description' 	: 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
        			'thumbnail' 	: ['images/small/9.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
        			'large' 		: ['images/large/9.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
        			'button_list' 	:
        			[
        				{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/' },
        				{ 'title':'Download', 'url':'http://porfolio.bonchen.net/'}
        			],
        			'tags' 			: ['Vintage', 'Landscape']
        		}

        	]
        });
    });
</script>