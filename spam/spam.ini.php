<?php
// $Id: spam.ini.php,v 1.51 2007/02/25 11:54:47 henoheno Exp $
// Spam-related setting
//
// Reference:
//   Spamdexing http://en.wikipedia.org/wiki/Spamdexing


$blocklist['goodhost'] = array(
	'IANA-examples' => '#^(?:.*\.)?example\.(?:com|net|org)$#',

	// Yours
	//''
	//''
	//''

);

$blocklist['badhost'] = array(

	// H
	'*.hacked.at',		// by kickme.to

	'*.hang.at',		// by kickme.to
	'*.hangup.at',		// by kickme.to
	'*.has.it',			// by kickme.to
	'*.hide.at',		// by kickme.to
	'*.hindu.at',		// by kickme.to
	'*.htmlpage.at',	// by kickme.to
	'*.hungarian.at',	// by kickme.to
	
	'*.icelandic.at',	// by kickme.to
	'*.independents.at',// by kickme.to
	'*.invisible.at',	// by kickme.to
	'*.is-chillin.it',	// by kickme.to
	'*.is-groovin.it',	// by kickme.to
	
	'*.japanese.at',	// by kickme.to
	'*.jive.at',		// by kickme.to
	
	'*.kickass.at',		// by kickme.to
	'*.kickme.to',		// by kickme.to
	'*.kindergarden.at',// by kickme.to
	'*.knows.it',		// by kickme.to
	'*.kurd.at',		// by kickme.to
	
	'*.labour.at',		// by kickme.to
	'*.leech.at',		// by kickme.to
	'*.liberals.at',	// by kickme.to
	'*.linuxserver.at',	// by kickme.to
	'*.liqour.at',		// by kickme.to
	'*.lovez.it',		// by kickme.to
	
	'*.makes.it',		// by kickme.to
	'*.maxed.at',		// by kickme.to
	'*.means.it',		// by kickme.to
	'*.meltdown.at',	// by kickme.to
	'*.methodist.at',	// by kickme.to
	'*.microcomputers.at',// by kickme.to
	'*.mingle.at',		// by kickme.to
	'*.mirror.at',		// by kickme.to
	'*.moan.at',		// by kickme.to
	'*.mormons.at',		// by kickme.to
	'*.musicmix.at',	// by kickme.to
	
	'*.nationalists.at',// by kickme.to
	'*.needz.it',		// by kickme.to
	'*.nerds.at',		// by kickme.to
	'*.neuromancer.at',	// by kickme.to
	'*.newbie.at',		// by kickme.to
	'*.nicepage.at',	// by kickme.to
	'*.ninja.at',		// by kickme.to
	'*.norwegian.at',	// by kickme.to
	'*.ntserver.at',	// by kickme.to
	
	'*.owns.it',		// by kickme.to
	
	'*.paint.at',		// by kickme.to
	'*.palestinian.at',	// by kickme.to
	'*.phoneme.at',		// by kickme.to
	'*.phreaking.at',	// by kickme.to
	'*.playz.it',		// by kickme.to
	'*.polish.at',		// by kickme.to
	'*.popmusic.at',	// by kickme.to
	'*.portuguese.at',	// by kickme.to
	'*.powermac.at',	// by kickme.to
	'*.processor.at',	// by kickme.to
	'*.prospects.at',	// by kickme.to
	'*.protestant.at',	// by kickme.to
	
	'*.rapmusic.at',	// by kickme.to
	'*.raveparty.at',	// by kickme.to
	'*.reachme.at',		// by kickme.to
	'*.reads.it',		// by kickme.to
	'*.reboot.at',		// by kickme.to
	'*.relaxed.at',		// by kickme.to
	'*.republicans.at',	// by kickme.to
	'*.researcher.at',	// by kickme.to
	'*.reset.at',		// by kickme.to
	'*.resolve.at',		// by kickme.to
	'*.retrocomputers.at',// by kickme.to
	'*.rockparty.at',	// by kickme.to
	'*.rocks.it',		// by kickme.to
	'*.rollover.at',	// by kickme.to
	'*.rough.at',		// by kickme.to
	'*.rules.it',		// by kickme.to
	'*.rumble.at',		// by kickme.to
	'*.russian.at',		// by kickme.to
	
	'*.says.it',		// by kickme.to
	'*.scared.at',		// by kickme.to
	'*.seikh.at',		// by kickme.to
	'*.serbian.at',		// by kickme.to
	'*.short.as',		// by kickme.to
	'*.shows.it',		// by kickme.to
	'*.silence.at',		// by kickme.to
	'*.simpler.at',		// by kickme.to
	'*.sinclair.at',	// by kickme.to
	'*.singz.it',		// by kickme.to
	'*.slowdown.at',	// by kickme.to
	'*.socialists.at',	// by kickme.to
	'*.spanish.at',		// by kickme.to
	'*.split.at',		// by kickme.to
	'*.stand.at',		// by kickme.to
	'*.stoned.at',		// by kickme.to
	'*.stumble.at',		// by kickme.to
	'*.supercomputer.at',// by kickme.to
	'*.surfs.it',		// by kickme.to
	'*.swedish.at',		// by kickme.to
	'*.swims.it',		// by kickme.to
	'*.synagogue.at',	// by kickme.to
	'*.syntax.at',		// by kickme.to
	'*.syntaxerror.at',	// by kickme.to
	
	'*.techie.at',		// by kickme.to
	'*.temple.at',		// by kickme.to
	'*.thinkbig.at',	// by kickme.to
	'*.thirsty.at',		// by kickme.to
	'*.throw.at',		// by kickme.to
	'*.toplist.at',		// by kickme.to
	'*.trekkie.at',		// by kickme.to
	'*.trouble.at',		// by kickme.to
	'*.turkish.at',		// by kickme.to
	
	'*.unexplained.at',	// by kickme.to
	'*.unixserver.at',	// by kickme.to
	
	'*.vegetarian.at',	// by kickme.to
	'*.venture.at',		// by kickme.to
	'*.verycool.at',	// by kickme.to
	'*.vic-20.at',		// by kickme.to
	'*.viewing.at',		// by kickme.to
	'*.vintagecomputers.at',// by kickme.to
	'*.virii.at',		// by kickme.to
	'*.vodka.at',		// by kickme.to
	
	'*.wannabe.at',		// by kickme.to
	'*.webpagedesign.at',// by kickme.to
	'*.wheels.at',		// by kickme.to
	'*.whisper.at',		// by kickme.to
	'*.whiz.at',		// by kickme.to
	'*.wonderful.at',	// by kickme.to
	
	'*.zor.org',		// by kickme.to
	'*.zx80.at',		// by kickme.to
	'*.zx81.at',		// by kickme.to
	'*.zxspectrum.at',	// by kickme.to



	// A: Sample setting of
	// Existing URI redirection or masking services

	// A-1: By HTTP redirection, HTML meta, HTML frame, JavaScript,
	// or DNS subdomains
	//
	// as known as cheap URI obscuring services today,
	// for spammers and affiliate users dazed by money.
	//
	//   Messages from forerunners:
	//     o-rly.net
	//       "A URL REDIRECTION SERVICE GONE BAD"
	//       "SORRY, TRULY"
	//     smcurl.com
	//       "Idiots were using smcURL to shrink URLs and
	//        send them out via spam."
	//     tinyclick.com
	//       "...stop offering it's free services because
	//        too many people were taking advantage of it"
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2/207
	//

	// 0
	'*.0kn.com',		// by shim.net
	'0nz.org',
	'0rz.tw',
	'0url.com',
	'0zed.info',

	// 1
	'*.1024bit.at',		// by kickme.to
	'*.128bit.at',		// by kickme.to
	'12url.org',
	'*.15h.com',
	'*.16bit.at',		// by kickme.to
	'*.1dr.biz',
	'1nk.us',
	'*.1sta.com',		// by shorturl.com
	'1url.org',
	'1url.in',

	// 2
	'*.24ex.com',		// by shorturl.com
	'*.256bit.at',		// by kickme.to
	'*.2cd.net',		// by shim.net
	'2ch2.net',
	'*.2fear.com',		// by shorturl.com
	'*.2fortune.com',	// by shorturl.com
	'*.2freedom.com',	// by shorturl.com
	'*.2hell.com',		// by shorturl.com
	'2hop4.com',
	'2me.tw',			// by urladmin at zvxr.com, DNS arzy.net
	'2s.ca',
	'*.2savvy.com',		// by shorturl.com
	'2site.com',
	'*.2truth.com',		// by shorturl.com
	'*.2tunes.com',		// by shorturl.com
	'*.2ya.com',		// by shorturl.com

	// 3
	'301url.com',
	'*.321.cn',			// by active.ws
	'*.32bit.at',		// by kickme.to
	'32url.com',
	'3dg.de',
	'*.3dg.de',

	// 4
	'*.4bb.ru',
	'*.4mg.com',		// by freeservers.com
	'*.4x2.net',		// by active.ws
	'*.4t.com',			// by freeservers.com

	// 5
	'*.512bit.at',		// by kickme.to
	'5jp.net',

	// 6
	'*.64bit.at',		// by kickme.to
	'6url.com',
	'*.6url.com',
	'*.6x.to',

	// 7
	'74678439.com',		// by shortify.com

	// 8
	'82m.org',
	'*.8bit.at',		// by kickme.to
	'*.8l.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.8m.com',			// by freeservers.com
	'*.8m.net',			// by freeservers.com
	'*.8k.com',			// by freeservers.com

	// 9
	'*.9ax.net',		// by xn6.net

	// A
	'*.abwb.org',
	'acnw.de',
	'active.ws',
	'store.adobe.com',	// Stop it
	'*.adores.it',		// by kickme.to
	'*.again.at',		// by kickme.to
	'*.allday.at',		// by kickme.to
	'*.alone.at',		// by kickme.to
	'*.altair.at',		// by kickme.to
	'*.alturl.com',		// by shorturl.com
	'*.american.at',	// by kickme.to
	'*.amiga500.at',	// by kickme.to
	'*.ammo.at',		// by kickme.to
	'amoo.org',
	'*.amplifier.at',	// by kickme.to
	'*.amstrad.at',		// by kickme.to
	'*.andmuchmore.com',// by webalias.com
	'*.anglican.at',	// by kickme.to
	'*.angry.at',		// by kickme.to
	'*.antiblog.com',	// by shorturl.com
	'*.arecool.net',	// by iscool.net
	'*.around.at',		// by kickme.to
	'*.arrange.at',		// by kickme.to
	'*.asso.ws',		// xrelay.net - proxid.net
	'ataja.es',
	'atk.jp',
	'athomebiz.com',
	'athomebiz.com',
	'aukcje1.pl',
	'*.australian.at',	// by kickme.to

	// B
	'*.baptist.at',		// by kickme.to
	'*.basque.at',		// by kickme.to
	'*.battle.at',		// by kickme.to
	'*.bazooka.at',		// by kickme.to
	'*.be.tf',			// by ulimit.com
	'*.berber.at',		// by kickme.to
	'*.best.cd',		// by ulimit.com
	'*.better.ws',		// by active.ws
	'*.bigbig.com',		// by shorturl.com
	'biglnk.com',
	'bingr.com',
	'bittyurl.com',
	'*.bizz.cc',
	'*.blackhole.at',	// by kickme.to
	'*.blg.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.blo.pl',			// HTML frame
	'blue11.jp',		// by fanznet.jp
	'*.booze.at',		// by kickme.to
	'*.bosnian.at',		// by kickme.to
	'*.brainiac.at',	// by kickme.to
	'*.brazilian.at',	// by kickme.to
	'briefurl.com',
	'brokenscript.com',
	'*.browser.to',		// by webalias.com
	'*.bsd-fan.com',	// by ulimit.com
	'*.bucksogen.com',
	'budgethosts.org',
	'*.bulochka.org',	// by bucksogen.com
	'*.bummer.at',		// by kickme.to
	'*.burn.at',		// by kickme.to
	'*.buzznet.com',
	'*.bydl.com',

	// C
	'*.c-64.at',		// by kickme.to
	'*.c-o.cc',			// by c-o.in
	'*.c-o.in',
	'c64.ch',
	'*.c0m.st',			// by ulimit.com
	'*.ca.tc',			// by ulimit.com
	'*.catalonian.at',	// by kickme.to
	'*.catholic.at',	// by kickme.to
	'*.chapel.at',		// by kickme.to
	'checkasite.net',
	'*.chicappa.jp',
	'*.chills.it',		// by kickme.to
	'chopurl.com',
	'*.christiandemocrats.at',// by kickme.to
	'*.cjb.net',
	'*.clan.st',		// by ulimit.com
	'clipurl.com',
	'*.cname.at',		// by kickme.to
	'*.co.nr',
	'*.colors.at',		// by kickme.to
	'*.com02.com',		// by ulimit.com
	'*.commodore.at',	// by kickme.to
	'*.commodore64.at',	// by kickme.to
	'*.communists.at',	// by kickme.to
	'*.conservatives.at',// by kickme.to
	'*.conspiracy.at',	// by kickme.to
	'*.cool158.com',	// by cool168.com
	'*.cool168.com',
	'*.cooldude.at',	// by kickme.to
	'*.coolhere.com',	// by hotredirect.com
	'coolurl.de',
	'*.corp.st',		// xrelay.net - proxid.net
	'*.coz.in',			// by c-o.in
	'*.cq.bz',			// by c-o.in
	'*.craves.it',		// by kickme.to
	'*.croatian.at',	// by kickme.to
	'cutalink.com',
	'*.cuteboy.at',		// by kickme.to
	'*.cx.la',			// by dl.am

	// D
	'*.da.cx',
	'*.da.ru',
	'dae2.com',
	'*.dancemix.at',	// by kickme.to
	'*.danceparty.at',	// by kickme.to
	'*.dances.it',		// by kickme.to
	'*.danish.at',		// by kickme.to
	'*.dealing.at',		// by kickme.to
	'*.dealtap.com',	// by shorturl.com
	'*.deep.at',		// by kickme.to
	'*.democrats.at',	// by kickme.to
	'dephine.org',
	'digbig.com',
	'*.digipills.com',
	'*.digs.it',		// by kickme.to
	'*.discutbb.com',
	'*.divxlinks.at',	// by kickme.to
	'*.divxmovies.at',	// by kickme.to
	'*.divxstuff.at',	// by kickme.to
	'*.dizzy.at',		// by kickme.to
	'*.dl.am',
	'*.dmdns.com',
	'*.does.it',		// by kickme.to
	'doiop.com',
	'*.dork.at',		// by kickme.to
	'dornenboy.de',		// by coolurl.de
	'*.drives.it',		// by kickme.to
	'drlinky.com',
	'dtmurl.com',		// by dreamteammoney.com
	'durl.us',
	'*.dutch.at',		// by kickme.to
	'*.dvdlinks.at',	// by kickme.to
	'*.dvdonly.ru',
	'*.dvdmovies.at',	// by kickme.to
	'*.dvdstuff.at',	// by kickme.to
	'*.dynu.ca',

	// E
	'*.ebored.com',		// by shorturl.com
	'*.echoz.com',		// by shorturl.com
	'elfurl.com',
	'*.emailme.net',	// by vdirect.com
	'*.emulators.at',	// by kickme.to
	'*.en.st',			// by ulimit.com
	'*.end.at',			// by kickme.to
	'*.english.at',		// by kickme.to
	'*.eniac.at',		// by kickme.to
	'eny.pl',
	'*.error403.at',	// by kickme.to
	'*.error404.at',	// by kickme.to
	'*.escape.to',		// by webalias.com
	'*.euro.st',		// by ulimit.com
	'*.euro.tm',		// xrelay.net - proxid.net
	'*.evangelism.at',	// by kickme.to
	'*.exhibitionist.at',// by kickme.to
	'eyeqweb.com',		// by coolurl.de

	// F
	'*.f2b.be',			// by f2b.be
	'*.faith.at',		// by kickme.to
	'*.faithweb.com',	// by freeservers.com
	'*.fancyurl.com',
	'fanznet.com',
	'ffwd.to',
	'url.fibiger.org',
	'*.fight.at',		// by kickme.to
	'*.filetap.com',	// by shorturl.com
	'*.finish.at',		// by kickme.to
	'*.finnish.at',		// by kickme.to
	'fireme.to',
	'flingk.com',
	'fm7.biz',
	'*.fornovices.com',	// by webalias.com
	'*.forward.at',		// by kickme.to
	'*.fr.fm',			// by ulimit.com
	'*.fr.st',			// by ulimit.com
	'*.fr.vu',			// by ulimit.com
	'*.freakz.eu',		// by f2b.be
	'*.freebie.at',		// by kickme.to
	'*.freebiefinders.net',	// by shim.net
	'*.freegaming.org',	// by shim.net
	'*.freehosting.net',// by freeservers.com
	'*.freemp3.at',		// by kickme.to
	'*.freeservers.com',
	'*.freewebpages.com',
	'*.french.at',		// by kickme.to
	'fyad.org',
	'fype.com',
	'*.fun.to',			// by webalias.com
	'*.funurl.com',		// by shorturl.com
	'*.fx.to',

	// G
	'galeon.com',		// by hispavista.com
	'*.galeon.com',		// by hispavista.com
	'gentleurl.net',
	'*.get2.us',
	'*.getto.net',		// by vdirect.com
	'glinki.com',
	'*.globalredirect.com',
	'*.go.cc',
	'goonlink.com',
	'*.got.to',			// by webalias.com
	'gourl.org',
	'*.gourl.org',
	'*.gq.nu',			// by freeservers.com
	'*.gr.st',			// by ulimit.com
	'*.graduatejobs.at',// by kickme.to
	'greatitem.com',
	'*.greatitem.com',
	'*.greenparty.at',	// by kickme.to
	'*.grunge.at',		// by kickme.to
	'gzurl.com',
	'url.grillsportverein.de',

	'hardcore-porn.de',	// by coolurl.de
	'*.hasballs.com',	// by get2.us
	'*.headplug.com',	// by shorturl.com
	'here.is',
	'*.here.ws',		// by active.ws
	'*.hereweb.com',	// by shorturl.com
	'*.hispavista.com',
	'*.hitart.com',		// by shorturl.com
	'*.homepagehere.com',// by hotredirect.com
	'hort.net',
	'*.hothere.com',	// by hotredirect.com
	'*.hottestpix.com',	// by webalias.com
	'*.ht.st',			// by ulimit.com
	'*.htmlplanet.com',	// by freeservers.com
	'*.hux.de',
	'*.hyu.jp',			// by harudake.net

	'*.i89.us',
	'*.iceglow.com',
	'ie.to',
	'igoto.co.uk',
	'ilook.tw',
	'*.imegastores.com',// by webalias.com
	'*.inetgames.com',	// by vdirect.com
	'inetwork.co.il',
	'*.infogami.com',
	'*.int.ms',			// by ulimit.com
	'ipoo.org',
	'*.iscool.net',
	'*.isfun.net',		// by iscool.net
	'*.ismyidol.com',	// by get2.us
	'*.it.st',			// by ulimit.com
	'*.itgo.com',		// by freeservers.com
	'*.iwarp.com',		// by freeservers.com
	'iwebtool.com',
	'*.iwebtool.com',

	'jeeee.net',
	'jemurl.com',
	'jggj.net',
	'jpan.jp',
	'*.java-fan.com',	// by ulimit.com
	'jmp2.net',			// by URLadmin at ZVXR.Com, DNS arzy.net

	'kat.cc',
	'katou.in',			// by fanznet.com
	'kisaweb.com',
	'*.ko188.com',		// by cool168.com
	'*.ko168.com',		// by cool168.com
	'*.korzhik.org',	// by bucksogen.com
	'*.kovrizhka.org',	// by bucksogen.com
	'krotki.pl',
	'kuerzer.de',
	'*.kupisz.pl',
	'kuso.cc',

	'lame.name',
	'*.latest-info.com',// by webalias.com
	'*.learn.to',		// by webalias.com
	'lediga.st',
	'liencourt.com',
	'linkezy.com',
	'linkook.com',
	'*.linux-fan.com',	// by ulimit.com
	'lispurl.com',
	'lnk.in',
	'linkachi.com',
	'linkzip.net',

	'*.mac-fan.com',	// by ulimit.com
	'makeashorterlink.com',
	'maschinen-bluten-nicht.de',// by coolurl.de
	'mcturl.com',
	'memurl.com',
	'minilien.com',		// by digipills.com
	'miniurl.pl',
	'*.mirrorz.com',	// by shorturl.com
	'mixi.bz',
	'mo-v.jp',
	'monster-submit.com',
	'mooo.jp',
	'*.moviefever.com',	// by webalias.com
	'*.mp3.ms',			// by ulimit.com
	'*.mp3-archives.com',	// by webalias.com
	'murl.net',
	'*.mustbehere.com',	// by hotredirect.com
	'myactivesurf.net',
	'mymap.in',			// by fanznet.com
	'*.mypiece.com',	// by active.ws
	'*.myprivateidaho.com',	// by webalias.com
	'mytinylink.com',
	'myurl.in',

	'*.n0.be',			// by f2b.be
	'*.n3t.nl',			// by f2b.be
	'*.ne1.net',
	'*.netbounce.com',	// by vdirect.com
	'*.netbounce.net',	// by vdirect.com
	'nextdoor.to',		// by fireme.to
	'nlug.org',			// by Nashville Linux Users Group
	'*.notlong.com',
	'*.nuv.pl',

	'*.official.ws',	// by active.ws
	'ofzo.be',
	'*.oneaddress.net',	// by vdirect.com
	'*.onlyhere.net',	// by hotredirect.com
	'*.ontheinter.net',
	'ontheway.to',		// by fireme.to
	'*.op7.net',		// by shim.net
	'*.ouch.ws',		// by active.ws

	'*.pagehere.com',	// by hotredirect.com
	'palurl.com',
	'*.paulding.net',
	'*.perso.tc',		// xrelay.net - proxid.net 
	'phpfaber.org',
	'*.pirozhok.org',	// by bucksogen.com
	'*.plushka.org',	// by bucksogen.com
	'pnope.com',
	'*.premium.ws',		// by active.ws
	'prettylink.com',
	'*.pryanik.org',	// by bucksogen.com

	'*.qc.tc',			// by ulimit.com
	'qrl.jp',
	'qurl.net',

	'*.r8.org',			// by ne1.net
	'*.radpages.com',	// by webalias.com
	'redirectme.to',
	'redirme.com',
	'relic.net',
	'rio.st',
	'*.remember.to',	// by webalias.com
	'*.resourcez.com',	// by webalias.com
	'*.return.to',		// by webalias.com
	'*.rmcinfo.fr',
	'*.ryj.pl',			// by Home.pl Sp. J. (info at home.pl)
	'rubyurl.com',
	'*.runboard.com',
	'runurl.com',

	's-url.net',
	'*.s5.com',			// by freeservers.com
	'*.sail.to',		// by webalias.com
	'saitou.in',		// by fanznet.com
	'satou.in',			// by fanznet.com
	'*.scriptmania.com',// by freeservers.com
	'*.sg5.info',
	'*.shim.net',
	'shorl.com',
	'*.short.be',		// by f2b.be
	'shortenurl.com',
	'shorterlink.com',
	'shortlinks.co.uk',
	'shorttext.com',
	'*.shorturl.com',
	'shorturl-accessanalyzer.com',
	'shortify.com',
	'shrinkalink.com',
	'shrinkthatlink.com',
	'shrinkurl.us',
	'shrt.org',
	'shrunkurl.com',
	'shurl.org',
	'shurl.net',
	'sid.to',
	'simurl.com',
	'*.site.tc',		// xrelay.net - proxid.net
	'*.skracaj.pl',
	'skiltechurl.com',
	'skocz.pl',
	'slimurl.jp',
	'smallurl.eu',
	'smurl.name',
	'*.snapto.net',		// by vdirect.com
	'snipurl.com',
	'*.societe.st',		// xrelay.net - proxid.net
	'*.sp.st',			// by ulimit.com
	'sp-nov.net',
	'splashblog.com',
	'*.sports-reports.com',// by webalias.com
	'*.spotted.us',		// by get2.us
	'*.spyw.com',		// by shorturl.com
	'*.ssr.be',			// by f2b.be
	'*.stop.to',		// by webalias.com
	'*.suisse.st',		// by ulimit.com
	'*.such.info',		// by active.ws
	'susan.in',			// by fanznet.com
	'*.sushka.org',		// by bucksogen.com
	'*.surfhere.net',	// by hotredirect.com
	'surl.dk',			// by s-url.dk
	'surl.ws',
	'symy.jp',

	'*.t2u.com',		// by ulimit.com
	'*.thrill.to',		// by webalias.com
	'tighturl.com',
	'tiniuri.com',
	'*.tiny.cc',
	'tiny.pl',
	'tiny2go.com',
	'tinylink.com',		// by digipills.com
	'tinylink.eu',
	'tinylinkworld.com',
	'tinypic.com',
	'tinyr.us',
	'tinyurl.com',
	'tinyurl.name',		// by comteche.com
	'tinyurl.us',		// by comteche.com
	'titlien.com',
	'tlurl.com',
	'*.tk',				// 'Tokelau' ccTLD
	'tnij.org',
	'*.toolbot.com',
	'*.tophonors.com',	// by webalias.com
	'*.torontonian.com',
	'trimurl.com',
	'*.true.ws',		// by active.ws
	'ttu.cc',
	'*.tvheaven.com',	// by freeservers.com
	'turl.jp',
	'*.tux.nu',			// by iscool.net
	'*.tweaker.eu',		// by f2b.be
	'*.tz4.com',

	'uchinoko.in',
	'*.uncutuncensored.com',// by webalias.com
	'*.uni.cc',
	'*.unixlover.com',	// by ulimit.com
	'*.up.to',			// by webalias.com
	'*.uploadr.com',
	'url.vg',			// by jeremyjohnstone.com
	'url4.net',
	'url-c.com',
	'urlcut.com',
	'urlcutter.com',
	'urlic.com',
	'urlin.it',
	'urlser.com',
	'urlsnip.com',
	'urlzip.de',
	'urlx.org',
	'utun.jp',

	'*.v9z.com',		// by shim.net
	'*.vdirect.com',	// by vdirect.com
	'*.vdirect.net',	// by vdirect.com
	'vgo2.com',
	'*.veryweird.com',	// by webalias.com
	'*.visit.ws',		// by active.ws
	'*.vze.com',		// by shorturl.com

	'w3t.org',
	'wapurl.co.uk',
	'*.way.to',			// by webalias.com
	'wbkt.net',
	'*.web-freebies.com',// by webalias.com
	'*.webalias.com',
	'*.webdare.com',	// by webalias.com
	'webmasterwise.com',
	'*.webrally.net',	// by vdirect.com
	'*.went2.us',		// by get2.us
	'*.wentto.us',		// by get2.us
	'wittylink.com',
	'wiz.sc',			// tiny.cc related

	'*.xit.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.xlc.pl',			// by Home.pl Sp. J. (info at home.pl)
	'xhref.com',
	'*.xn6.net',
	'xrl.us',			// by metamark.net
	'*.xxx-posed.com',	// by webalias.com

	'y11.net',
	'*.y11.net',
	'yatuc.com',
	'yep.it',
	'yurel.com',

	'z.la',
	't.z.la',			// by z.la
	'zapurl.com',
	'zarr.co.uk',
	'*.zik.mu',			// by ulimit.com
	'zippedurl.com',
	'*.zonehere.com',	// by hotredirect.com
	'*.zu5.net',
	'zuso.tw',
	'*.zwap.to',

	// A-2: Dynamic DNS, Dynamic IP services, DNS vulnerabilities, or another DNS cases
	//
	//'*.ath.cx',				// by dydns.com
	//'*.bpa.nu',				// by ddns.ru
	//'*.dnip.net',
	//'*.dnsalias.org',			// by dydns.com
	//'*.dyndns.*',
		//'*.dyndns.dk',
		//'*.dyndns.co.za',
		//'*.dyndns.org',	// by dydns.com
		//'*.dyndns.nemox.net',
	//'*.dynu.com',
	//'*.shacknet.nu',		// by dydns.com
	//'*.nerdcamp.net',
	//'*.zenno.info',
	//'*.mine.nu',			// by dydns.com
	//'*.cm',	// 'Cameroon' ccTLD, sometimes used as typo of '*.com'
			// and all non-recorded domains redirect to 'agoga.com' now


	// B: Sample setting of:
	// Jacked (taken advantage of) and cleaning-less sites
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2%2F208

	// B-1: Web spaces
	//
	//   Messages from forerunners:
	//     activefreehost.com
	//       "We regret to inform you that ActiveFreeHost
	//        free hosting service has is now closed (as of
	//        September 18). We have been online for over
	//        two and half years, but have recently decided
	//        to take time for software improvement to fight
	//        with server abuse, Spam advertisement and
	//        fraud."
	//
	'*.0-st.com',		// by 100 Best Inc (info at 100best.com)
	'*.0catch.com',		// by bluehost.com
	'*.0moola.com',
	'*.150m.com',		// by 100 Best, Inc., NS by 0catch.com
	'*.2-hi.com',		// by 100 Best Inc (info at 100best.com)
	'*.20fr.com',		// by 100 Best Inc (info at 100best.com)
	'*.20ii.com',		// by 100 Best Inc (info at 100best.com)
	'*.20is.com',		// by 100 Best Inc (info at 100best.com)
	'*.20it.com',		// by 100 Best Inc (info at 100best.com)
	'*.20m.com',		// by jlee at 100bestinc.com
	'*.20me.com',		// by 100 Best Inc (info at 100best.com)
	'20six.nl',			// by 20six weblog services (postmaster at 20six.nl)
	'*.20six.nl',
	'20six.co.uk',		// by 20six weblog services
	'*.20six.co.uk',
	'20six.fr',			// by 20six weblog services
	'*.20six.fr',
	'*.20to.com',		// by 100 Best Inc (info at 100best.com)
	'*.2page.de',
	'*.2u-2.com',		// by 100 Best Inc (info at 100best.com)
	'*.3-st.com',		// by 100 Best Inc (info at 100best.com)
	'*.50megs.com',
	'*.9999mb.com',
	'*.9k.com',
	'*.aimoo.com',
	'*.alice.it',
	'*.alkablog.com',
	'angelfire.com',	// angelfire.lycos.com
	'm.askfaq.org',
	'*.atfreeforum.com',
	'*.asphost4free.com',
	'*.beeplog.com',
	'bestfreeforums.com',
	'*.blog.hr',
	'blogas.lt',
	'*.blogg.de',
	'*.bloggingmylife.com',
	'bloggers.nl',
	'*.blogharbor.com',
	'myblogma.com',
	'*.blogspot.com',		// by Google
	'*.bravenet.com',
	'blogyaz.com',
	'*.by.ru',
	'blogs.chueca.com',
	'concepts-mall.com',
	'*.createmybb.com',
	'dakrats.net',
	'*.devil.it',
	'*.diaryland.com',
	'*.dox.hu',
	'dreipage.de',		// by 2page.de
	'*.eblog.com.au',
	'*.ekiwi.de',
	'forum.ezedia.net',
	'*.extra.hu',
	'fingerprintmedia.com',
	'*.filelan.com',
	'*.free-25.de',
	'*.free-bb.com',
	'freebb.nl',
	'*.freeclans.de',
	'*.freelinuxhost.com',	// by 100webspace.com
	'freeforum.at',
	'foroswebgratis.com',
	'*.forum-on.de',
	'forumnow.com.br',
	'*.forumppl.com',
	'forumprofi' => '#^(?:.*\.)?forumprofi[0-9]*\.de$#',
	'forumup' => '#^^(?:.*\.)?forumup\.' .
		'(?:at|be|ca|ch|co\.nz|co\.uk|co\.za|com|com.au|cn|' .
		'cz|de|dk|es|eu|fr|gr|hu|in|info|ir|it|jobs|jp|lt|' .
		'lv|org|pl|name|net|nl|ro|ru|se|sk|tv|us|web\.tr)$#',
	'freepowerboards.com',
	'*.fws1.com',		// by 100 Best Inc (info at 100best.com)
	'*.fw-2.com',		// by 100 Best Inc (info at 100best.com)
	'*.hit.bg',				// by forumup.com ??
	'*.goodboard.de',
	'docs.google.com',			// by Google
	'enunblog.com',
	'club.giovani.it',
	'groups-beta.google.com',	// by Google
	'healthcaregroup.com',
	'*.hk.pl',				// by info at home.pl
	'*.host-page.com',
	'*.home.pl',			// by info at home.pl
	'hometown.aol.com',
	'*.hut2.ru',
	'*.ibelgique.com',		// by ieurop.net
	'*.iespana.es',			// by ieurop.net
	'*.ifastnet.com',
	'*.ifrance.com',		// by ieurop.net
	'*.ihateclowns.net',
	'*.iitalia.com',		// by ieurop.net
	'*.inc5.com',			// by 100 Best Inc (info at 100best.com)
	'*.iquebec.com',		// by ieurop.net
	'*.isuisse.com',		// by ieurop.net
	'*.journalscape.com',
	'*.kokoom.com',
	'*.ksiegagosci.info',
	'*.land.ru',			// pochta.ru related
	'limmon.net',
	'*.logme.nl',
	'ltss.luton.ac.uk',
	'angelfire.lycos.com',
	'*.messageboard.nl',
	'*.monforum.com',
	'*.monforum.fr',		// by monforum.com
	'myblog.de',			// by 20six weblog services
	'myblog.es',			// by 20six weblog services
	'myblog.is',
	'*.myblogvoice.com',
	'*.myforum.ro',
	'*.myxhost.com',
	'*.narod.ru',
	'*.netfast.org',
	'neweconomics.info',
	'*.nm.ru',
	'*.on-4.com',			// by 100 Best Inc (info at 100best.com)
	'*.parlaris.com',
	'*.phorum.pl',
	'*.phpbbx.de',
	'*.pochta.ru',
	'proboards' => '#^(?:.*\.)proboards[0-9]*\.com$#',
	'*.quickfreehost.com',
	'quizilla.com',
	'realhp.de',
	'*.sayt.ws',
	'*.sbn.bz',				// by rin.ru
	'*.siamforum.com',
	'*.siteburg.com',
	'*.spazioforum.it',
	'*.squarespace.com',
	'*.st-3.com',			// by 100 Best Inc (info at 100best.com)
	'*.st20.com',			// by 100 Best Inc (info at 100best.com)
	'stickypond.com',
	'*.stormloader.com',
	'*.t35.com',
	'*.talkthis.com',
	'tbns.net',
	'telasipforums.com',
	'thestudentunderground.org',
	'think.ubc.ca',
	'*.up-a.com',			// by 100 Best Inc (info at 100best.com)
	'*.vidiac.com',
	'volny.cz',
	'*.welover.org',
	'*.web-space.ws',		// by your-websites.com
	'weblogmaniacs.com',
	'websitetoolbox.com',
	'wh-gb.de',
	'*.wikidot.com',
	'*.wmjblogs.ru',
	'*.wol.bz',				 // by sbn.bz (rin.ru)
	'*.wordpress.com',
	'wsboards.com',
	'*.wsboards.com',
	'xeboards.com',
	'*.xhostar.com',
	'blogs.ya.com',
	'yourfreebb.de',
	'*.your-websites.net',	// by your-websites.com

	// B-2: Jacked contents, something implanted
	// (e.g. some sort of blog comments, BBSes, forums, wikis)
	'*.aamad.org',
	'alwanforthearts.org',
	'anewme.org',
	'blepharospasm.org',
	'*.buzznet.com',
	'*.colourware.co.uk',
	'icu.edu.ua',
	'*.iphpbb.com',
	'board-z.de',
	'*.board-z.de',
	'writing.csustan.edu',
	'deproduction.org',
	'dc503.org',
	'fhmcsa.org.au',
	'*.fhmcsa.org.au',
	'forum.lixium.fr',
	'funkdoc.com',
	'*.goodboard.de',
	'homepage-dienste.com',
	'*.inventforum.com',
	'plone4.fnal.gov',
	'funnyclipcentral.com',
	'huskerink.com',
	'hyba.info',
	'*.hyba.info',
	'ipwso.org',
	'internetincomeclub.com',
	'jloo.org',
	'*.jloo.org',
	'test.kernel.org',
	'kevindmurray.com',
	'macfaq.net',
	'me4x4.com',
	'morallaw.org',
	'morerevealed.com',
	'mamiya.co.uk',
	'mountainjusticemedia.org',
	'*.mybbland.com',
	'users.nethit.pl',
	'njbodybuilding.com',
	'nlen.org',
	'omikudzi.ru',
	'pix4online.co.uk',
	'privatforum.de',
	'*.reallifelog.com',
	'rkphunt.com',
	'saskchamber.com',
	'selikoff.net',
	'setbb.com',
	'silver-tears.net',
	'troms-slekt.com',
	'dir.kzn.ru',			// by Kazan State University
	'sys.kcn.ru',			// by Kazan State University
	'theedgeblueisland.com',
	'mathbio.truman.edu',
	'tzaneen.co.za',
	'urgentclick.com',
	'wolvas.org.uk',
	'wvup.edu',
	'youthpeer.org',
	'*.zenburger.com',


	// C: Sample setting of:
	// Exclusive spam domains
	//
	// Seems to have flavor of links, pills, gamble, online-games, erotic,
	// affiliates, finance, sending viruses, malicious attacks to browsers,
	// and/or mixed ones
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2/208

	// C-1: Domain sets (seems to be) born to spam you
	//
	// All buziness-related spam
	//'*.biz'
	//
	'*.lovestoryx.com',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	'*.loveaffairx.com',// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	'*.onmore.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	'*.scfind.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	'*.scinfo.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	'*.webwork88.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	//
	'htewbop.org',		// by Boris (boss at bse-sofia.bg)
	'*.htewbop.org',
	'*.kimm--d.org',	// by Boris (boss at bse-sofia.bg)
	'*.gtre--h.org',	// by Boris (boss at bse-sofia.bg)
	'*.npou--k.org',	// by Boris (boss at bse-sofia.bg)
	'*.bres--z.org',	// by Boris (boss at bse-sofia.bg)
	'berk--p.org',		// by Boris (boss at bse-sofia.bg)
	'*.bplo--s.org',	// by Boris (boss at bse-sofia.bg)
	'*.basdpo.org',		// by Boris (boss at bse-sofia.bg)
	'jisu--m.org',		// by Boris (boss at bse-sofia.bg)
	'kire--z.org',		// by Boris (boss at bse-sofia.bg)
	'*.mertnop.org',	// by Boris (boss at bse-sofia.bg)
	'mooa--c.org',		// by Boris (boss at bse-sofia.bg)
	'nake--h.org',		// by Boris (boss at bse-sofia.bg)
	'noov--b.org',		// by Boris (boss at bse-sofia.bg)
	'suke--y.org',		// by Boris (boss at bse-sofia.bg)
	'vasdipv.org',		// by Boris (boss at bse-sofia.bg)
	'*.vasdipv.org',
	'vase--l.org',		// by Boris (boss at bse-sofia.bg)
	'vertinds.org',		// by Boris (boss at bse-sofia.bg)
	//
	'*.aqq3.info',		// by Thai Dong Changli (pokurim at gamebox.net)
	'*.axa00.info',		// by Thai Dong Changli (pokurim at gamebox.net)
	'*.okweb11.org',	// by Thai Dong Changli (pokurim at gamebox.net)
	'*.okweb12.org',	// by Thai Dong Changli (pokurim at gamebox.net)
	'*.okweb13.org',	// by Thai Dong Changli (pokurim at gamebox.net)
	'*.okweb14.org',	// by Thai Dong Changli (pokurim at gamebox.net)
	//
	'informazionicentro.info',	// by opezdol at gmail.com
	'*.informazionicentro.info',// by opezdol at gmail.com
	'notiziacentro.info',		// by opezdol at gmail.com
	'*.notiziacentro.info',		// by opezdol at gmail.com
	//
	'*.adult-chat-world.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com),
	'*.adult-chat-world.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.adult-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.adult-sex-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.adult-cam-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.adult-cam-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.dildo-chat.org',			// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.dildo-chat.info',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	// flirt-online.info is not CamsGen
	'*.flirt-online.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.live-adult-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.live-adult-chat.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.sexy-chat-rooms.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.sexy-chat-rooms.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.swinger-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.swinger-sex-chat.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.nasty-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.nasty-sex-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
	'*.camshost.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
	'*.camdoors.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
	'*.chatdoors.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
	'*.lebedi.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru), 
	'*.loshad.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.porosenok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.indyushonok.info',		// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.kotyonok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.kozlyonok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.svinka.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.svinya.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.zherebyonok.info',		// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
	'*.adult-chat-sex-cam.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	'*.live-chat-cam-sex.info',		// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	'*.live-nude-cam-chat.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	'*.live-sex-cam-nude-chat.info',// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	'*.sex-cam-live-chat-web.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	'*.sex-chat-live-cam-nude.info',// 'CamsGen' by Lee Chang (nebucha at model-x.com)
	//
	'*.trevisos.org',	// by Marcello Italianore (mital at topo20.org)
	'*.topo20.org',		// by Marcello Italianore (mital at topo20.org)
	//
	'*.wellcams.com',
	'*.j8v9.info',		// by wellcams.com
	'wellcams.biz',		// by wellcams.com
	//
	'*.besturgent.org',		// by Chinu Hua Dzin (graz at rubli.biz)
	'*.googletalknow.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	'*.montypythonltd.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	'*.supersettlemet.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	'*.thepythonfoxy.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	'*.ukgamesyahoo.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	'*.youryahoochat.org',	// by Chinu Hua Dzin (graz at rubli.biz)
	//
	// Gamble
	'*.atroulette.com',			// by Gino Sands (admin at atroulette.com), post with the-craps-100.us
	'*.casinoqz.com',			// by Berenice Snow
	'*.dcasinoa.com',			// by August Hawkinson, post with casinoqz.com
	'*.kenogo.com',				// by Adriane Bell
	'*.mycaribbeanpoker.com',	// by Andy Mullis, post with kenogo.com
	'*.crapsok.com',			// by Devon Adair (postmaster at crapsok.com)
	'*.onbaccarat.com',			// by Kassandra Dunn (admin at onbaccarat.com), post with crapsok.com
	'*.the-craps-100.us',		// by Lorrine Ripley (postmaster at the-craps-100.us)
	'*.atonlineroulette.com',	// by Blaise Johns (hostmaster at atonlineroulette.com), post with mycaribbeanpoker.com
	//
	'dbsajax.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.dbsajax.org',
	'acgt2005.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.acgt2005.org',
	'gopikottoor.com',	// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.gopikottoor.com',
	'koosx.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.koosx.org',
	'mmgz.org',			// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.mmgz.org',
	'zhiyehua.net',		// by Kikimas at mail.net, Redirect to nb717.com etc
	'*.zhiyehua.net',
	//
	'1818u.org',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.1818u.org',
	'18ew.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.18ew.info',
	'43sexx.org',		// by Andrey (vdf at lovespb.com), / was not found
	'*.43sexx.org',
	'56porn.org',		// by Andrey (vdf at lovespb.com), / was not found
	'*.56porn.org',
	'6discount.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.6discount.info',
	'78porn.org',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
	'*.78porn.org',
	'78rus.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.78rus.info',
	'92ssex.org',		// by Andrey (vdf at lovespb.com), "ForumGenerator"
	'*.92ssex.org',
	'93adult.org',		// by Andrey (vdf at lovespb.com), "ForumGenerator"
	'*.93adult.org',
	'buypo.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.buypo.info',
	'canadausa.info',	// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
	'*.canadausa.info',
	'cvwifw.info',		// by Andrey (vdf at lovespb.com), redirect to ifree-search.org
	'*.cvwifw.info',
	'eplot.info',		// by Beatrice C. Anderson (Beatrice.C.Anderson at spambob.com), redirect to activefreehost.com
	'*.eplot.info',
	'fuck2z.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"-like design
	'*.fuck2z.info',
	'freexz.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.freexz.info',
	'ifree-search.org',	// by Andrey (vdf at lovespb.com)
	'*.ifree-search.org',
	'kra1906.info',		// by Nike Borzoff (nike.borzoff at gmail.com), "UcoZ WEB-SERVICES"
	'*.kra1906.info',
	'lovespb.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.lovespb.info',
	'oursales.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.oursales.info',
	'olala18.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.olala18.info',
	'pldk.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.pldk.info',
	'pornr.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
	'*.pornr.info',
	'poz2.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.poz2.info',
	'saleqw.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.saleqw.info',
	'sexof.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
	'*.sexof.info',
	'sexz18.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.sexz18.info',
	'sexy69a.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.sexy69a.info',
	'spb78.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.spb78.info',
	'usacanadauk.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.usacanadauk.info',
	'v782mks.info',		// by Andrey (vdf at lovespb.com)
	'*.v782mks.info',
	'vny0.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.vny0.info',
	'wifes1.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
	'*.wifes1.info',
	'xranvam.info',		// by Andrey (vdf at lovespb.com)
	'*.xranvam.info',
	//
	'allsexonline.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
	'*.allsexonline.info',
	'bequeous.info',	// by David C. Lack (David.C.Lack at dodgeit.com), redirect to activefreehost.com
	'*.bequeous.info',
	'sopius.info',		// by kuzmas (admin at irtes.ru), redirect to activefreehost.com
	'*.sopius.info',
	'superfreedownload.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
	'*.superfreedownload.info',
	'yerap.info',		// by Kuzma V Safonov (admin at irtes.ru), redirect to activefreehost.com
	'*.yerap.info',
	//
	'*.flywebs.com',	// by Andrey Zhurikov (zhu1313 at mail.ru)
	'*.hostrim.com',	// by Andrey Zhurikov (zhu1313 at mail.ru)
	'playbit.com',		// by Andrey Zhurikov (zhu1313 at mail.ru)
	//
	'*.bsb3b.info',		// by Son Dittman (webmaster at dgo3d.info)
	'*.dgo3d.info',		// by Son Dittman (webmaster at dgo3d.info)
	'*.dgo5d.info',		// by Son Dittman (webmaster at dgo3d.info)
	//
	'diabetescarelink.com',	// by cooler.infomedia at gmail.com
	'firstdebthelp.com',	// by cooler.infomedia at gmail.com
	//
	'*.pokah.lv',		// by Nikolajs Karpovs (hostmaster at astrons.com)
	'*.astrons.com',	// by Nikolaj  Karpov  (hostmaster at astrons.com)
	//
	'implex3.com',		// by Skar (seocool at bk.ru)
	'softprof.org',		// by Skar (seocool at bk.ru)
	//
	'tops.gen.in',		// Hiding google:sites. by Kosare (billing at caslim.info)
	'caslim.info',
	//
	'777-poker.biz',	// by Alexandr (foxwar at foxwar.ispvds.com), Hiding google?q=
	'*.777-poker.biz',
	'*.porn-11.com',	// by Alexandr (foxwar at foxwar.ispvds.com)
	//
	'*.conto.pl',		// by biuro at nazwa.pl
	'*.guu.pl',			// by conto.pl (domena at az.pl)
	//
	// Domains by Lin Zhi Qiang (mail at pcinc.cn)
	// NOTE: pcinc.cn -- by Lin Zhi Qiang (lin80 at 21cn.com)
	'bbs-qrcode.com',
	'*.bbs-qrcode.com',
	'conecojp.net',
	'*.conecojp.net',
	'gamaniaech.com',
	'*.gamaniaech.com',
	'game-oekakibbs.com',
	'*.game-oekakibbs.com',
	'games-nifty.com',
	'*.games-nifty.com',
	'gamesragnaroklink.net',
	'*.gamesragnaroklink.net',
	'gemnnammobbs.com',
	'*.gemnnammobbs.com',
	'geocitylinks.com',
	'*.geocitylinks.com',
	'homepage3-nifty.com',
	'*.homepage3-nifty.com',
	'hosetaibei.com',
	'*.hosetaibei.com',
	'jpragnarokonline.com',
	'*.jpragnarokonline.com',
	'jprmthome.com',
	'*.jprmthome.com',
	'lineage1bbs.com',
	'*.lineage1bbs.com',
	'lineage321.com',
	'*.lineage321.com',
	'netgamelivedoor.com',
	'*.netgamelivedoor.com',
	'playsese.com',
	'*.playsese.com',
	'ragnarok-game.com',
	'*.ragnarok-game.com',
	'ragnaroklink.com',
	'*.ragnaroklink.com',
	'rmt-navip.com',
	'*.rmt-navip.com',
	'roprice.com',
	'*.roprice.com',
	'watcheimpress.com',
	'*.watcheimpress.com',
	//
	'*.entirestar.com',		// by Baer (aakin at yandex.ru)
	'*.superbuycheap.com',	// by Baer (aakin at yandex.ru)
	'*.topdircet.com',		// by Baer (aakin at yandex.ru)
	//
	'tianmieccp.com',	// by jiuhatu kou (newblog9 at gmail.com)
	'*.tianmieccp.com',
	'xianqiao.net',		// by jiuhatu kou (newblog9 at gmail.com)
	'*.xianqiao.net',
	//
	'soft2you.info',	// by Michael (m.frenzy at yahoo.com)
	'*.soft2you.info',
	'top20health.info',	// by Michael (m.frenzy at yahoo.com)
	'*.top20health.info',
	'top20ringtones.info',// by Michael (m.frenzy at yahoo.com)
	'*.top20ringtones.info',
	'v09v.info',		// by Michael (m.frenzy at yahoo.com)
	'*.v09v.info',
	'x09x.info',		// by Michael (m.frenzy at yahoo.com)
	'*.x09x.info',
	//
	'bingogoldenpalace.info', 	// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.bingogoldenpalace.info',
	'ccarisoprodol.info',		// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.ccarisoprodol.info',
	'ezxcv.info',				// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.ezxcv.info',
	'isuperdrug.com',			// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.isuperdrug.com',
	'pharmacif.info',			// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.pharmacif.info',
	'pornsexteen.biz',			// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.pornsexteen.biz',
	'ugfds.info',				// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.ugfds.info',
	'vviagra.info',				// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'*.vviagra.info',
	//
	'*.cheapestviagraonline.info',	// by Anatol (anatolsenator at gmail.com)
	'*.buyphentermineworld.info',	// by Anatol (anatolsenator at gmail.com)
	//
	'testviagra.org',	// by Chong Li (chongli at mederotica.com)
	'listsitepro.com',	// by VO Entertainment Inc (webmaster at mederotica.com)
	//
	'xer-vam.org',		// by Dr. Portillo (aliacsandr85 at yahoo.com)
	'*.xer-vam.org',
	'vvsa.org', // by Eva Sabina Lopez Castell (aliacsandr85 at yahoo.com)
	'*.vvsa.org',
	//
	'axeboxew.info',	// by Billing Name:Gray (gray at trafic.name)
	'*.axeboxew.info',
	'boluzuhy.info',	// by Billing Name:Gray (gray at trafic.name)
	'*.boluzuhy.info',
	'ekafoloz.info',	// by Billing Name:Gray (gray at trafic.name)
	'*.ekafoloz.info',
	'exidiqe.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.exidiqe.info',
	'gubiwu.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.gubiwu.info',
	'jiuuz.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.jiuuz.info',
	'olasep.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.olasep.info',
	'oueuidop.info',	// by Billing Name:Gray (gray at trafic.name)
	'*.oueuidop.info',
	'oviravy.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.oviravy.info',
	'ragibe.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.ragibe.info',
	'udaxu.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.udaxu.info',
	'vubiheq.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.vubiheq.info',
	'yvaxat.info',		// by Billing Name:Gray (gray at trafic.name)
	'*.yvaxat.info',
	//
	'carmodelrank.com',	// by Brianna Dunlord (briasmi at yahoo.com)
	'*.carmodelrank.com',
	'cutestories.net',	// by Brianna Dunlord (briasmi at yahoo.com)
	'*.cutestories.net',
	'sturducs.com',
	'*.sturducs.com',
	'bestother.info',	// by Tim Rennei (TimRennei at yahoo.com), redirect to amaena.com (fake-antivirus)
	'*.bestother.info',
	'yaahooo.info',		// by Alice T. Horst (Alice.T.Horst at pookmail.com), redirect to activefreehost.com
	'*.yaahooo.info',
	//
	'*.freebloghost.org',	// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
	'*.freeprohosting.org',	// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
	'*.sashawww.info',		// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
	//
	// Car / Home / Life insurance
	'0q.org',				// by Shamika Curtin
	'*.0q.org',
	'1-bookmark.com',		// by Sonia Snyder
	'*.1-bookmark.com',
	'1day-insurance.com',	// by Kelsie Strouse
	'*.1day-insurance.com',
	'1upinof.com',			// by Diego Johnson
	'*.1upinof.com',
	'18wkcf.com',			// by Lexy Bohannon
	'*.18wkcf.com',
	'2001werm.org',			// by Raphael Rayburn
	'*.2001werm.org',
	'2004heeparea1.org',	// by Dinorah Andrews
	'*.2004heeparea1.org',
	'21nt.net',				// by Jaida Estabrook
	'*.21nt.net',
	'3somes.org',			// by Mauro Tillett
	'*.3somes.org',
	'8-f22.com',			// by Larraine Evers
	'*.8-f22.com',
	'a40infobahn.com',		// by Amit Nguyen
	'*.a40infobahn.com',
	'a4h-squad.com',		// by Ross Locklear
	'*.a4h-squad.com',
	'aaadvertisingjobs.com',// by Luciano Frisbie
	'*.aaadvertisingjobs.com',
	'acornwebdesign.co.uk',	// by Uriel Dorian
	'*.acornwebdesign.co.uk',
	'architectionale.com',	// by Wilbur Cornett
	'ad-makers.com',		// by Shemeka Arsenault
	'*.ad-makers.com',
	'*.architectionale.com',
	'azstudies.org',		// by Bernardina Walden
	'*.azstudies.org',
	'boreholes.org',		// by Flora Reed
	'*.boreholes.org',
	'healthinsuranceem.com',		// by Justin Munson
	'*.healthinsuranceem.com',
	'onunicarehealthinsurance.com',	// by  Lawerence Paredes
	'*.onunicarehealthinsurance.com',
	'mysteryclips.com',		// by Edward Ashford
	'*.mysteryclips.com',
	'richcapaldi.com',		// by Kya Haggard
	'*.richcapaldi.com',
	'shoes-shop.us',		// by Austen Higginbotham
	'*.shoes-shop.us',
	//
	'dronadaarsujf.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.dronadaarsujf.info',
	'fromnananaref.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.fromnananaref.info',
	'goorkkjsaka.info',		// by Cortez Shinn (info at goorkkjsaka.info)
	'*.goorkkjsaka.info',
	'jkdfjjkkdfe.info',		// by Rico Laplant (info at nnjdksfornms.info)
	'*.jkdfjjkkdfe.info',
	'jkllloldkjsa.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.jkllloldkjsa.info',
	'nnjdksfornms.info',	// by Rico Laplant (info at nnjdksfornms.info)
	'*.nnjdksfornms.info',
	'mcmdkkksaoka.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.mcmdkkksaoka.info',
	'srattaragfon.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.srattaragfon.info',
	'yreifnnonoom.info',	// by Rico Laplant (info at nnjdksfornms.info)
	'*.yreifnnonoom.info',
	'zjajjsvgeuds.info',	// by Cortez Shinn (info at goorkkjsaka.info)
	'*.zjajjsvgeuds.info',
	//
	'ancorlontano.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.ancorlontano.com',
	'dentroallago.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.dentroallago.com',
	'digiovinezza.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.digiovinezza.com',
	'ematuranza.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.ematuranza.com',
	'ilfango.com',			// by Harvey Pry (admin at ematuranza.com)
	'*.ilfango.com',
	'nullarimane.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.nullarimane.com',
	'questaimmensa.com',	// by Harvey Pry (admin at ematuranza.com)
	'*.questaimmensa.com',
	'tentailvolo.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.tentailvolo.com',
	'unatenerezza.com',		// by Harvey Pry (admin at ematuranza.com)
	'*.unatenerezza.com',
	'volgondilettose.com',	// by Harvey Pry (admin at ematuranza.com)
	'*.volgondilettose.com',
	//
	'bid99df.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.bid99df.info',
	'bj498uf.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.bj498uf.info',
	'edeuj84.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.edeuj84.info',
	'f4mfid.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.f4mfid.info',
	'g4vf03a.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.g4vf03a.info',
	'j09j4r.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.j09j4r.info',
	'jv4r8hv.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.jv4r8hv.info',
	'k43sd3.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k43sd3.info',
	'k4r84d.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k4r84d.info',
	'k4rvda.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k4rvda.info',
	'k4v0df.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k4v0df.info',
	'k903os.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k903os.info',
	'k9df93d.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.k9df93d.info',
	'kv94fd.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.kv94fd.info',
	'ksjs93.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.ksjs93.info',
	'l0ks03.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.l0ks03.info',
	'l9u3jc.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.l9u3jc.info',
	'lv043a.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.lv043a.info',
	'nh94h9.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.nh94h9.info',
	'm94r9d.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.m94r9d.info',
	's87fvd.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.s87fvd.info',
	'v3k0d.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.v3k0d.info',
	'v4r8j4.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.v4r8j4.info',
	'vf044s.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.vf044s.info',
	'vj49rs.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.vj49rs.info',
	'vk498j.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.vk498j.info',
	'u03jow.info',			// by Cornelius Boyers (admin at edeuj84.info)
	'*.u03jow.info',


	// C-2: Lonely domains (buddies not found yet)
	'0nline-porno.info',	// by Timyr (timyr at narod.ru)
	'*.0nline-porno.info',
	'1111mb.com',
	'*.1111mb.com',
	'19cellar.info',	// by Eduardo Guro (boomouse at gmail.com)
	'*.advancediet.com',// by Shonta Mojica (hostadmin at advancediet.com)
	'adultpersonalsclubs.com',	// by Peter (vaspet34 at yahoo.com)
	'*.adultpersonalsclubs.com',
	'alfanetwork.info',	// by dante (dantequick at gmail.com)
	'*.alfanetwork.info',
	'*.areaseo.com',	// by Antony Carpito (xcentr at lycos.com)
	'awardspace.com',	// by abuse at awardspace.com, no DirectoryIndex
	'*.awardspace.com',
	'*.baurish.info',
	'bestdiscountpharmacy.biz',	// by John  Brown (john780321 at yahoo.com), 2007-01-27, 61.144.122.45
	'bloggerblast.com',	// by B. Kadrie (domains at starwhitehosting.com)
	'*.businessplace.biz',	// by Grenchenko Ivan Petrovich (eurogogi at yandex.ru)
	'covertarena.co.uk',// by Wayne Huxtable
	'd999.info',		// by Peter Vayner (peter.vayner at inbox.ru)
	'*.d999.info',
	'*.dlekei.info',	// by Maxima Bucaro (webmaster at tts2f.info)
	'*.discutbb.com',	// by Perez Thomas (thomas.jsp at libertysurf.fr)
	'dreamteammoney.com',	// dtmurl.com related
	'drugs-usa.info',	// by Edward SanFilippo (Edward.SanFilippo at gmail.com), redirect to activefreehost.com
	'*.drugs-usa.info',
	'*.ec51.com',		// by zhenfei chen (szczffhh_sso at 21cn.net)
	'fastppc.info',		// by peter conor (fastppc at msn.com)
	'*.fateback.com',	// by LiquidNet Ltd. Redirect to www.japan.jp
	'*.free-finding.com',	// by Ny hom (nyhom at yahoo.com)
	'*.free-rx.net',	// by Neo-x (neo-xxl at yandex.ru), redirect to activefreehost.com
	'*.google-yahoo-msn.org',	// by Equipe Tecnica Ajato (rambap at yandex.ru)
	'*.hot4buy.org',	// by Hot Maker (jot at hot4buy.org)
	'hotnetinfo.info',	// by Lisa Edwards (lisaedwards at ledw.th)
	'hotscriptonline.info',	// by Psy Search (admin at psysearch.com)
	'*.hut1.ru',		// by domains at agava.com
	'*.incbuy.info',	// by Diego T. Murphy (Diego.T.Murphy at incbuy.info)
	'investorvillage.com',
	'ismarket.com',		// Google-hiding. intercage.com related IP
	'italy-search.org',	// by Alex Yablin (zaharov-alex at yandex.ru)
	'*.italy-search.org',
	'*.jimka-mmsa.com',	// by Alex Covax (c0vax at mail.ru)
	'*.ls.la',			// by Milton McLellan (McLellanMilton at yahoo.com)
	'myfgj.info',		// by Filus (softscript at gmail.com)
	'*.mujiki.com',		// by Mila Contora (ebumsn at ngs.ru)
	'ngfu2.info',		// by Tara Lagrant (webmaster at ngfu2.info)
	'*.ngfu2.info',
	'ornit.info',		// by Victoria C. Frey (Victoria.C.Frey at pookmail.com)
	'*.ornit.info',
	'*.pahuist.info',	// by Yura (yuralg2005 at yandex.ru)
	'*.perevozka777.ru',	// by witalik at gmail.com
	'portaldiscount.com',	// by Mark Tven (bestsaveup at gmail.com)
	'*.portaldiscount.com',
	'*.prama.info',		// by Juan.Kang at mytrashmail.com
	'qoclick.net',		// by DMITRIY SOLDATENKO
	'relurl.com',		// tiny-like. by Grzes Tlalka (grzes1111 at interia.pl)
	'*.roin.info',		// by Evgenius (roinse at yandex.ru)
	'*.seek-www.com',	// by Adam Smit (pingpong at mail.md)
	'sirlook.com',
	'tabsdrugstore.info',	// by Jonn Gardens (admin at SearchHealtAdvCorpGb.com -- no such domain)
	'*.tabsdrugstore.info',
	'*.thetinyurl.com',	// by Beth J. Carter (Beth.J.Carter at thetinyurl.com)
	'unctad.net',		// by gfdogfd at lovespb.com
	'*.webnow.biz',		// by Hsien I Fan (admin at servcomputing.com)
	'wellcams.biz',		// by Sergey Sergiyenko (studioboss at gmail.com)
	'*.xpacificpoker.com',// by Hubert Hoffman (support at xpacificpoker.com)
	'zlocorp.com',		// by tonibcrus at hotpop.com, spammed well with "http ://zlocorp.com/"
	'*.zlocorp.com',

	// C-3: Not classifiable (information wanted)
	//
	// Something incoming to pukiwiki related sites
	'planetnana.co.il',	// nana.co.il related
	'mylexus.info',		// by Homer Simpson (simhomer12300 at mail.com), Redirect to Google
	'*.nana.co.il',
	'up2.co.il',		// inetwork.co.il related
	'*.up2.co.il',

	// D: Sample setting of
	// "third party in good faith"s
	//
	// Hosts shown inside of the implanted contents,
	// not used via spam, but maybe useful to detect these contents
	//
	// 'RESERVED',


	// Z: Yours
	//
	//'',
	//'',
	//'',


);
?>
