<?php
/**
 * Block Information & Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$btn_border_attribute     = UAGB_Block_Helper::uag_generate_border_attribute( 'btn' );
$overall_border_attribute = UAGB_Block_Helper::uag_generate_border_attribute( 'overall' );
$inherit_from_theme       = 'enabled' === ( 'deleted' !== UAGB_Admin_Helper::get_admin_settings_option( 'uag_btn_inherit_from_theme_fallback', 'deleted' ) ? 'disabled' : UAGB_Admin_Helper::get_admin_settings_option( 'uag_btn_inherit_from_theme', 'disabled' ) );

return array_merge(
	array(
		'blockName'                     => 'post-carousel',
		'postsToShow'                   => 6,
		'postsOffset'                   => 0,
		'post_type'                     => 'carousel',
		'align'                         => 'left',
		'rowGap'                        => 20,
		'rowGapTablet'                  => '',
		'rowGapMobile'                  => '',
		'columnGap'                     => 20,
		'columnGapTablet'               => '',
		'columnGapMobile'               => '',
		'bgType'                        => 'color',
		'bgColor'                       => '#f6f6f6',
		'displayPostTaxonomyAboveTitle' => 'withMeta',
		'titleColor'                    => '',
		'titleTag'                      => 'h3',
		'titleFontSize'                 => '',
		'titleFontSizeType'             => 'px',
		'titleFontSizeMobile'           => '',
		'titleFontSizeTablet'           => '',
		'titleFontFamily'               => '',
		'titleFontWeight'               => '',
		'titleFontStyle'                => '',
		'titleLineHeightType'           => 'em',
		'titleLineHeight'               => '',
		'titleLineHeightTablet'         => '',
		'titleLineHeightMobile'         => '',
		'titleLoadGoogleFonts'          => false,
		'metaFontSize'                  => '',
		'metaFontSizeType'              => 'px',
		'metaFontSizeMobile'            => '',
		'metaFontSizeTablet'            => '',
		'metaFontFamily'                => '',
		'metaFontWeight'                => '',
		'metaFontStyle'                 => '',
		'metaLineHeightType'            => 'em',
		'metaLineHeight'                => '',
		'metaLineHeightTablet'          => '',
		'metaLineHeightMobile'          => '',
		'metaLoadGoogleFonts'           => false,
		'excerptFontSize'               => '',
		'excerptFontSizeType'           => 'px',
		'excerptFontSizeMobile'         => '',
		'excerptFontSizeTablet'         => '',
		'excerptFontFamily'             => '',
		'excerptFontWeight'             => '',
		'excerptFontStyle'              => '',
		'excerptLineHeightType'         => 'em',
		'excerptLineHeight'             => '',
		'excerptLineHeightTablet'       => '',
		'excerptLineHeightMobile'       => '',
		'excerptLoadGoogleFonts'        => false,
		'ctaFontSize'                   => '',
		'ctaFontSizeType'               => 'px',
		'ctaFontSizeTablet'             => '',
		'ctaFontSizeMobile'             => '',
		'ctaFontFamily'                 => '',
		'ctaFontWeight'                 => '',
		'ctaFontStyle'                  => '',
		'ctaLineHeightType'             => 'em',
		'ctaLineHeight'                 => '',
		'ctaLineHeightTablet'           => '',
		'ctaLineHeightMobile'           => '',
		'ctaLoadGoogleFonts'            => false,
		'metaColor'                     => '',
		'highlightedTextColor'          => '#fff',
		'highlightedTextBgColor'        => '#3182ce',
		'excerptColor'                  => '',
		'ctaColor'                      => '',
		'ctaBgType'                     => 'color',
		'ctaBgHType'                    => 'color',
		'ctaBgColor'                    => '',
		'ctaHColor'                     => '',
		'ctaBgHColor'                   => '',
		'contentPadding'                => '20',
		'contentPaddingMobile'          => '',
		'btnVPadding'                   => '',
		'btnHPadding'                   => '',
		'ctaBottomSpace'                => '0',
		'ctaBottomSpaceTablet'          => '',
		'ctaBottomSpaceMobile'          => '',
		'imageBottomSpace'              => '15',
		'imageBottomSpaceTablet'        => '',
		'imageBottomSpaceMobile'        => '',
		'taxonomyBottomSpace'           => '',
		'taxonomyBottomSpaceTablet'     => '',
		'taxonomyBottomSpaceMobile'     => '',
		'titleBottomSpace'              => '15',
		'titleBottomSpaceTablet'        => '',
		'titleBottomSpaceMobile'        => '',
		'metaBottomSpace'               => '15',
		'metaBottomSpaceTablet'         => '',
		'metaBottomSpaceMobile'         => '',
		'excerptBottomSpace'            => '25',
		'excerptBottomSpaceTablet'      => '',
		'excerptBottomSpaceMobile'      => '',
		'arrowSize'                     => '24',
		'arrowColor'                    => '#000',
		'arrowDots'                     => '',
		'arrowBorderSize'               => '0',
		'arrowBorderRadius'             => '0',
		'arrowDistance'                 => '',
		'arrowDistanceTablet'           => '',
		'arrowDistanceMobile'           => '',
		'overlayOpacity'                => '50',
		'bgOverlayColor'                => '#000000',
		'ctaText'                       => __( 'Read More', 'ultimate-addons-for-gutenberg' ),
		'btnBorderHColor'               => '',
		'imgPosition'                   => 'top',

		'displayPostContentRadio'       => 'excerpt',
		'excludeCurrentPost'            => '',
		'rowGapUnit'                    => 'px',
		'columnGapUnit'                 => 'px',
		'contentPaddingUnit'            => 'px',
		'excerptBottomSpaceUnit'        => 'px',
		'paginationSpacingUnit'         => 'px',
		'imageBottomSpaceUnit'          => 'px',
		'taxonomyBottomSpaceUnit'       => 'px',
		'titleBottomSpaceUnit'          => 'px',
		'metaBottomSpaceUnit'           => 'px',
		'ctaBottomSpaceUnit'            => 'px',
		'titleTransform'                => '',
		'metaTransform'                 => '',
		'excerptTransform'              => '',
		'ctaTransform'                  => '',
		'titleDecoration'               => '',
		'metaDecoration'                => '',
		'excerptDecoration'             => '',
		'ctaDecoration'                 => '',
		'paddingBtnTopTablet'           => '',
		'paddingBtnRightTablet'         => '',
		'paddingBtnBottomTablet'        => '',
		'paddingBtnLeftTablet'          => '',
		'paddingBtnTopMobile'           => '',
		'paddingBtnRightMobile'         => '',
		'paddingBtnBottomMobile'        => '',
		'paddingBtnLeftMobile'          => '',
		'paddingBtnUnit'                => 'px',
		'mobilePaddingBtnUnit'          => 'px',
		'tabletPaddingBtnUnit'          => 'px',
		'spacingLink'                   => '',
		'spacingLinkPadding'            => '',
		'paddingTopTablet'              => '',
		'paddingRightTablet'            => '',
		'paddingBottomTablet'           => '',
		'paddingLeftTablet'             => '',
		'paddingTopMobile'              => '',
		'paddingRightMobile'            => '',
		'paddingBottomMobile'           => '',
		'paddingLeftMobile'             => '',
		'paddingUnit'                   => 'px',
		'mobilePaddingUnit'             => 'px',
		'tabletPaddingUnit'             => 'px',
		'layoutConfig'                  => array(
			array( 'uagb/post-image' ),
			array( 'uagb/post-title' ),
			array( 'uagb/post-taxonomy' ),
			array( 'uagb/post-meta' ),
			array( 'uagb/post-excerpt' ),
			array( 'uagb/post-button' ),
		),
		'titleLetterSpacing'            => '',
		'titleLetterSpacingTablet'      => '',
		'titleLetterSpacingMobile'      => '',
		'titleLetterSpacingType'        => 'px',
		'metaLetterSpacing'             => '',
		'metaLetterSpacingTablet'       => '',
		'metaLetterSpacingMobile'       => '',
		'metaLetterSpacingType'         => 'px',
		'excerptLetterSpacing'          => '',
		'excerptLetterSpacingTablet'    => '',
		'excerptLetterSpacingMobile'    => '',
		'excerptLetterSpacingType'      => 'px',
		'ctaLetterSpacing'              => '',
		'ctaLetterSpacingTablet'        => '',
		'ctaLetterSpacingMobile'        => '',
		'ctaLetterSpacingType'          => 'px',
		'boxShadowColor'                => '#00000070',
		'boxShadowHOffset'              => 0,
		'boxShadowVOffset'              => 0,
		'boxShadowBlur'                 => '',
		'boxShadowSpread'               => '',
		'boxShadowPosition'             => 'outset',
		'boxShadowColorHover'           => '',
		'boxShadowHOffsetHover'         => 0,
		'boxShadowVOffsetHover'         => 0,
		'boxShadowBlurHover'            => '',
		'boxShadowSpreadHover'          => '',
		'boxShadowPositionHover'        => 'outset',
		'columns'                       => 3,
		'tcolumns'                      => 2,
		'mcolumns'                      => 1,
		'dotsMarginTop'                 => 20,
		'dotsMarginTopTablet'           => '',
		'dotsMarginTopMobile'           => '',
		'dotsMarginTopUnit'             => 'px',
		'useSeparateBoxShadows'         => true,
		'inheritFromThemeBtn'           => $inherit_from_theme,
	),
	$btn_border_attribute,
	$overall_border_attribute
);
